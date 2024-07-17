<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use App\Models\ArticlePost;

interface ArticlePostServiceInterface
{
    public function getAllArticlePosts(): Collection;
    public function createArticlePost(array $data): ArticlePost;
    public function getArticlePostById($id): ArticlePost;
    public function updateArticlePost($id, array $data): ArticlePost;
    public function deleteArticlePost($id): void;
}