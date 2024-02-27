<x-app-layout>
    <x-slot name="header bg-gray-100 dark:bg-gray-900">
        <h2 class="font-semibold text-xl text-gray-800 bg-gray-100 dark:bg-gray-900">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg d-flex justify-end">
                <aside class="bg-gray-100 dark:bg-gray-100 aside_right_box" id="aside" style="width: 30%;">
                    ASIDE CONTENT
                </aside>
                <div class="p-6 text-gray-900 dark:text-gray-100" style="width: 70%">
                    <section class="mb-3">
                        <div class="card">
                            <div class="card-header d-flex justify-between">
                                <div class="user_post_data_block">
                                    <a href="">
                                        <img src="..." class="card-img-top user_logo_post" alt="...">
                                    </a>
                                    <div class="d-flex post_user_data_box">
                                        <strong>Username</strong>
                                        <small style="color: #949494"><b>3s</b></small>
                                    </div>
                                </div>
                                <div class="setting_post">
                                    <span><i class="fa-solid fa-ellipsis"></i></span>
                                </div>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <div class="post_image_box">
                                    <img src="{{asset('assets/images/welcome_img.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                    </section>
                    <section>
                        <div class="card">
                            <div class="card-header d-flex justify-between">
                                <div class="user_post_data_block">
                                    <a href="">
                                        <img src="..." class="card-img-top user_logo_post" alt="...">
                                    </a>
                                    <div class="d-flex post_user_data_box">
                                        <strong>Username</strong>
                                        <small style="color: #949494"><b>3s</b></small>
                                    </div>
                                </div>
                                <div class="setting_post">
                                    <span><i class="fa-solid fa-ellipsis"></i></span>
                                </div>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <div class="post_image_box">
                                    <img src="{{asset('assets/images/welcome_img.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
