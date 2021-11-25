<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repository\Backend\ArticleRepository;
use App\Repository\Backend\GalleryRepository;
use App\Repository\Backend\ValveRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeFrontendController extends Controller
{
    public function __construct(
        public ArticleRepository $repository,
        public ValveRepository $valveRepository,
        public GalleryRepository $galleryRepository
    ){}

    public function index(): Factory|View|Application
    {
        return view('frontend.home', [
            'articles' => $this->repository->getAllVerified(),
            'valves' => $this->valveRepository->getAllVerified(),
            'galleries' => $this->galleryRepository->getAllVerified()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        return view('frontend.articles.show', [
            'article' => $this->repository->getOneByKey($key)
        ]);
    }
}
