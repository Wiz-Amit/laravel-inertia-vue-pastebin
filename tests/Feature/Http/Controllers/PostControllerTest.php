<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PostController
 */
class PostControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $posts = Post::factory()->count(3)->create();

        $response = $this->get(route('posts.index'));

        $response->assertOk();
        $response->assertViewIs('posts.index');
        $response->assertViewHas('posts');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('posts.create'));

        $response->assertOk();
        $response->assertViewIs('posts.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'store',
            \App\Http\Requests\PostStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $content = $this->faker->paragraphs(3, true);

        $response = $this->post(route('posts.store'), [
            'content' => $content,
        ]);

        $posts = Post::query()
            ->where('content', $content)
            ->get();
        $this->assertCount(1, $posts);
        $post = $posts->first();

        $response->assertRedirect(route('posts.index'));
        $response->assertSessionHas('posts.id', $post->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $post = Post::factory()->create();

        $response = $this->get(route('posts.show', $post));

        $response->assertOk();
        $response->assertViewIs('posts.show');
        $response->assertViewHas('post');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $post = Post::factory()->create();

        $response = $this->get(route('posts.edit', $post));

        $response->assertOk();
        $response->assertViewIs('posts.edit');
        $response->assertViewHas('post');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'update',
            \App\Http\Requests\PostUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $post = Post::factory()->create();
        $content = $this->faker->paragraphs(3, true);

        $response = $this->put(route('posts.update', $post), [
            'content' => $content,
        ]);

        $post->refresh();

        $response->assertRedirect(route('posts.index'));
        $response->assertSessionHas('posts.id', $post->id);

        $this->assertEquals($content, $post->content);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $post = Post::factory()->create();

        $response = $this->delete(route('posts.destroy', $post));

        $response->assertRedirect(route('posts.index'));

        $this->assertDeleted($post);
    }
}
