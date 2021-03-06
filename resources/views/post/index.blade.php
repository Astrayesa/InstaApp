@extends('layouts.main')

@section('content')
    <main class="page">
        <section>
            <div class="content">
                <div class="stories">
                    <button class="story">
                        <span class="avatar">
                            <img src="images/posts/default-user.png" alt="User">
                        </span>
                        <span class="name">user-story</span>
                    </button>

                    <button class="story">
                        <span class="avatar">
                            <img src="images/posts/default-user.png" alt="User">
                        </span>
                        <span class="name">user-story</span>
                    </button>

                    <button class="story">
                        <span class="avatar">
                            <img src="images/posts/default-user.png" alt="User">
                        </span>
                        <span class="name">user-story</span>
                    </button>

                    <button class="story">
                        <span class="avatar">
                            <img src="images/posts/default-user.png" alt="User">
                        </span>
                        <span class="name">user-story</span>
                    </button>

                    <button class="story">
                        <span class="avatar">
                            <img src="images/posts/default-user.png" alt="User">
                        </span>
                        <span class="name">user-story</span>
                    </button>

                    <button class="story">
                        <span class="avatar">
                            <img src="images/posts/default-user.png" alt="User">
                        </span>
                        <span class="name">user-story</span>
                    </button>
                </div>
                @foreach($posts as $post)
                    <div class="post">
                        <div class="post-top">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="images/posts/default-user.png" alt="User">
                                </div>
                                <a href="https://github.com/leocosta1" target="_blank">{{ auth()->user()->name }}</a>
                            </div>
                            <button>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="post-media">
                            <img src="{{ URL::to('/images').'/'.$post->image }}" alt="Post">
                        </div>
                        <div class="post-bottom">
                            <div class="buttons">
                                <div>
                                    <button>
                                        <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                            <path
                                                d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                            <path clip-rule="evenodd"
                                                  d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                                  fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                            <path
                                                d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <button>
                                    <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                        <path
                                            d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                    </svg>
                                </button>
                            </div>
                            <span class="likes">Liked by <a href="#">user__</a> and <strong>73 others</strong></span>
                            <p class="desc"><a href="https://github.com/leocosta1" target="_blank">{{ auth()->user()->name }}</a>
                                Responsive
                                clone of Instagram UI. Made with love, for study purposes. ???</p>
                            <span class="time">30 minutes ago</span>
                        </div>
                    </div>
                @endforeach
                {{--<div class="post">
                    <div class="post-top">
                        <div class="profile">
                            <div class="avatar">
                                <img src="images/posts/default-user.png" alt="User">
                            </div>
                            <a href="#">user-nickname</a>
                        </div>
                        <button>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="post-media">
                        <img src="images/posts/insta-clone.png" alt="Post">
                    </div>
                    <div class="post-bottom">
                        <div class="buttons">
                            <div>
                                <button>
                                    <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                        <path
                                            d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                    </svg>
                                </button>
                                <button>
                                    <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                        <path clip-rule="evenodd"
                                              d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <button>
                                    <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                        <path
                                            d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                    </svg>
                                </button>
                            </div>
                            <button>
                                <svg class="_8-yf5 " height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                </svg>
                            </button>
                        </div>
                        <span class="likes">Liked by <a
                                href="#">another-user</a> and <strong>112.534 other</strong></span>
                        <p class="desc"><a href="#">user-nickname</a> Post example.</p>
                        <span class="time">10 hours ago</span>
                    </div>
                </div>--}}
            </div>

            <div class="sidebar">
                <div class="user-profile">
                    <div class="avatar">
                        <img src="images/posts/default-user.png" alt="User">
                    </div>
                    <div class="desc">
                        <a href="https://github.com/leocosta1" target="_blank">{{ auth()->user()->name }}</a>
                        <span>Always learning!</span>
                    </div>
                </div>

                <div class="suggestions">
                    <h3>Suggestions for you</h3>

                    <div class="profiles">
                        <div class="profile">
                            <div class="avatar">
                                <img src="images/posts/default-user.png" alt="User">
                            </div>
                            <div class="desc">
                                <a href="#">user_nick</a>
                                <span>Followed by <a href="#">another-user</a> and more 12 people</span>
                            </div>
                        </div>

                        <div class="profile">
                            <div class="avatar">
                                <img src="images/posts/default-user.png" alt="User">
                            </div>
                            <div class="desc">
                                <a href="#">user_nick</a>
                                <span>Followed by <a href="#">another-user</a> and more 12 people</span>
                            </div>
                        </div>

                        <div class="profile">
                            <div class="avatar">
                                <img src="images/posts/default-user.png" alt="User">
                            </div>
                            <div class="desc">
                                <a href="#">user_nick</a>
                                <span>Followed by <a href="#">another-user</a> and more 12 people</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
