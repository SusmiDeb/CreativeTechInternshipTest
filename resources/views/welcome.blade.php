{{-- <h1>Instructions</h1>


<p>
    -- follow the instructions Readme.Md file and create this view here and render the data list.
</p> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Creative</title>
</head>

<body>













    <div class="conatiner mx-20">
        <div class=" bg-green-900 p-16 rounded-lg mb-5 mt-5 text-center">
            <div class="text-white font-bold text-2xl">
                <P>Start Time is 5:40 PM and End time is 7:05PM </P>
            </div>

        </div>
    </div>


    <div class=" container  ">

        <div class="flex flex-row px-20 text place-items-center">
            <div class="basis-1/4  mt-5 lg:w-1/3 md:w-full ">
                <div class="bg-green-900 py-16 px-2 rounded-lg my-10 text-center">
                    <p class="text-white font-bold text-2xl">Career Objective:
                        To secure a challenging position in a reputable ICT organization to expand my learning, knowledge, and skills.
                        Career Summary:
                        To make use of my interpersonal skills to achieve goals of a company that focuses on customer satisfaction and customer experience.

                    </p>
                </div>

            </div>
            <div class="basis-3/4 pr-8 py-10 xl:w-2/3 md:w-full">
                <section class="text-gray-600 body-font">
                    <div class=" px-5 py-24 mx-auto">

                        <div class="flex flex-wrap -m-4">
                            @foreach($products as $product)
                            <div class="p-4 xl:2/3 lg:w-1/3 md:w-2/3  ">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" {{-- src="{{ asset('images/card-1.png') }}" alt="blog" --}}
                                        src="{{ $product->image }}" alt="{{ $product->title }}">
                                    <div class="p-6">
                                        {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $product->title }}
                                            CATEGORY</h2> --}}
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                            {{ $product->title }}</h1>
                                        <p class="leading-relaxed mb-3">{{ $product->description }}Photo booth fam
                                            kinfolk cold-pressed sriracha
                                            leggings
                                            jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn
                                                More
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="p-4 xl:2/3 lg:w-1/3 md:w-2/3 w-full">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="{{ asset('images/card-1.png') }}" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings
                                            jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap">
                                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn
                                                More
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 xl:2/3 lg:w-1/3 md:w-2/3 w-full">
                                <div
                                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        src="{{ asset('images/card-1.png') }}" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars
                                        </h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha
                                            leggings
                                            jianbing microdosing tousled waistcoat.</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn
                                                More
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            <span
                                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            @endforeach

                        </div>
                        {{-- github repository link --}}
                        <div class=" bg-green-900 p-16 rounded-lg my-10 text-center">
                            <div class="text-white font-bold text-2xl">
                                <P>https://github.com/SusmiDeb  </P>
                            </div>

                        </div>
                    </div>
                </section>


            </div>
        </div>

    </div>




</body>

</html>
