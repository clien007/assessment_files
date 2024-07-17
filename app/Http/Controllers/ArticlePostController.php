<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticlePostRequest;
use App\Http\Resources\ArticlePostResource;
use App\Services\ArticlePostServiceInterface;
use Illuminate\Http\JsonResponse;

class ArticlePostController extends Controller
{
    protected $articlePostService;

    public function __construct(ArticlePostServiceInterface $articlePostService)
    {
        $this->articlePostService = $articlePostService;
    }

    public function index(): JsonResponse
    {
        $articlePosts = $this->articlePostService->getAllArticlePosts();
        return response()->json(ArticlePostResource::collection($articlePosts));
    }

    public function store(ArticlePostRequest $request): JsonResponse
    {
        $articlePost = $this->articlePostService->createArticlePost($request->validated());
        return response()->json(new ArticlePostResource($articlePost), 201);
    }

    public function show($id): JsonResponse
    {
        $articlePost = $this->articlePostService->getArticlePostById($id);
        return response()->json(new ArticlePostResource($articlePost));
    }

    public function update(ArticlePostRequest $request, $id): JsonResponse
    {
        $articlePost = $this->articlePostService->updateArticlePost($id, $request->validated());
        return response()->json(new ArticlePostResource($articlePost));
    }

    public function destroy($id): JsonResponse
    {
        $this->articlePostService->deleteArticlePost($id);
        return response()->json(null, 204);
    }
}