<x-app-layout>
    <x-slot name="header bg-gray-100 dark:bg-gray-900">
        <h2 class="font-semibold text-xl text-gray-800 bg-gray-100 dark:bg-gray-900">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 mt-10" style="width: 60%">
            <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg d-flex justify-between">
                <nav class="bg-gray-100 dark:bg-gray-100 main_left_nav" id="dashboard_left_nav">
                    NAV CONTENT
                </nav>
                <div class="p-6 text-gray-900 dark:text-gray-100 content-middle">
                    @foreach ($usersWithPosts as $user)             
                        <section class="mb-3">
                            <div class="card">
                                <div class="card-header d-flex justify-between">
                                    <div class="user_post_data_block">
                                        <a href="">
                                            <img src="..." class="card-img-top user_logo_post" alt="...">
                                        </a>
                                        <div class="d-flex post_user_data_box">
                                            <strong>{{ $user->name }}</strong>
                                            <small style="color: #949494"><b>3s</b></small>
                                        </div>
                                    </div>
                                    <div class="setting_post">
                                        <span><i class="fa-solid fa-ellipsis"></i></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        {{-- @foreach ($user->posts as $key => $post)
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $key +}}"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                    <img src="{{ $post->image }}" class="d-block w-100" alt="Slide {{ $key + 1 }}">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        @endforeach --}}
                                    </div>
                                    @foreach ($user->posts as $post)
                                        <h5 class="card-title"><b>{{ $post->title }}</b></h5>
                                        <p class="card-text">{{ $post->description }}</p>
                                        <div class="post_image_box">
                                            @if ($post->image)
                                                <img src="{{$post->image }}" alt="Post Image">
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    <div class="card_footer_container d-flex justify-between" style="font-size: 20px">
                                        <div class="post_favorite_box d-flex items-center gap-2" style="height: 40px">
                                            <i class="fa-regular fa-thumbs-up"></i>
                                            <span class="lead" style="font-size: 18px">3k</span>
                                        </div>
                                        <div class="share_comment_cont">
                                            <div class="d-flex items-center float-end">
                                                <i class="fa-solid fa-share"></i>
                                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="multiCollapseExample2">
                                                    <i class="fa-regular fa-comment"></i>
                                                </button>
                                            </div>
                                            <div class="collapse visible mt-10" style="width: 100% !important;" id="collapseExample">
                                                <div class="card card-body w-full">
                                                    <div class="comments_user">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum id, neque laborum aliquam pariatur molestias accusantium iste alias debitis sapiente tenetur, ab porro veniam, amet omnis cupiditate asperiores labore aliquid!
                                                        Deserunt laborum fugit impedit aliquam. Sit eius dolore, beatae porro numquam enim ut blanditiis assumenda cum soluta rem non recusandae maxime. Aliquid atque consequuntur, excepturi amet nulla eum nesciunt enim!
                                                        Eos veniam vel in quaerat omnis odit? Adipisci iste hic quis, nemo nisi impedit fuga officiis quia, dolor, quibusdam totam blanditiis nihil nobis dignissimos dolorum omnis laboriosam eos soluta veritatis?
                                                        Rerum ipsa, quas assumenda atque dolor molestias saepe quasi voluptate doloremque voluptatem nemo alias fuga esse quibusdam adipisci ab vero exercitationem distinctio expedita perferendis porro dicta? Vitae error provident consequuntur.
                                                        Possimus modi quam quae hic, mollitia vero illo dolor in qui. Error quasi labore, ratione sunt tempore consequatur nulla sapiente molestias, delectus aliquid reprehenderit rem sequi dignissimos. Distinctio, repellendus. Fugit.
                                                    </div>
                                                    <div class="input-group mt-3 d-flex items-center gap-2">
                                                        <textarea class="form-control form-control-sm" aria-label="With textarea"></textarea>
                                                        <button class="input-group-text bg-teal-400" style="padding: 10px; border-radius: 100px" id="basic-addon1">
                                                            <i class="fa-regular fa-paper-plane"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
                </div>
                <aside class="bg-gray-100 dark:bg-gray-100 main_right_aside" id="aside">
                    ASIDE CONTENT
                </aside>
            </div>
        </div>
    </div>
</x-app-layout>
