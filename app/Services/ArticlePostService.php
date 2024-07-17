<?php

namespace App\Services;

use App\Models\ArticlePost;
use Illuminate\Database\Eloquent\Collection;

class ArticlePostService implements ArticlePostServiceInterface
{
    public function getAllArticlePosts(): Collection
    {
        return ArticlePost::all();
    }

    public function createArticlePost(array $data): ArticlePost
    {
        return ArticlePost::create($data);
    }

    public function getArticlePostById($id): ArticlePost
    {
        return ArticlePost::findOrFail($id);
    }

    public function updateArticlePost($id, array $data): ArticlePost
    {
        $articlePost = ArticlePost::findOrFail($id);
        $articlePost->update($data);
        return $articlePost;
    }

    public function deleteArticlePost($id): void
    {
        $articlePost = ArticlePost::findOrFail($id);
        $articlePost->delete();
    }
}
