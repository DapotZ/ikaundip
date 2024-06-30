<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>Admin|Dasboard</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }

                }

            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

<body>
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="logo-sidebar"
        class="bg-gray-200 fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 border-r hover:w-64 hover:bg-white hover:shadow-lg"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <a href="javascript:;" class="flex items-center ps-2.5 mb-5 py-2 ">
                <svg class="-ml-3 h-9 w-9" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                        class="fill-current text-[#A28989] dark:fill-slate-600"></path>
                    <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                        class="fill-current text-[#A29999] group-hover:text-current" stroke-width=""></path>
                    <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                        class="fill-current group-hover:text-current"></path>
                </svg>
                <span class="self-center text-pretty text-xl font-bold whitespace-nowrap ml-1">MENU <span
                        class="text-[#A28989]">ADMIN</span></span>
            </a>
            <ul class="space-y-2 ">
                <li>
                    <a href="{{ route('admin.news') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="-ml-1 h-6 w-6" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M275.3536 334.518044v581.586489l83.740444-50.926933 83.740445 50.926933 83.740444-50.926933 83.729067 50.926933 83.751822-50.926933 83.729067 50.926933 83.729067-50.926933 83.751822 50.926933V202.683733c0-47.320178-38.286222-85.686044-85.538134-85.686044H189.838222"
                                    fill="#E6E6E6"></path>
                                <path
                                    d="M104.311467 549.137067h171.042133v-354.076445c0-43.1104-34.872889-78.051556-77.903644-78.051555h-15.246223c-43.019378 0-77.903644 34.941156-77.903644 78.051555v354.076445h0.011378z"
                                    fill="#CCCCCC"></path>
                                <path d="M382.327467 266.023822h185.252977v250.538667H382.327467z" fill="#A28989">
                                </path>
                                <path d="M642.093511 579.185778H856.291556v125.257955H642.093511z" fill="#FFCA6C">
                                </path>
                                <path
                                    d="M945.288533 635.8016a15.587556 15.587556 0 0 0 15.5648-15.598933V202.683733c0-55.853511-45.340444-101.284978-101.080177-101.284977H189.838222c-55.739733 0-101.091556 45.442844-101.091555 101.284977v248.570311a15.587556 15.587556 0 0 0 15.5648 15.598934 15.587556 15.587556 0 0 0 15.5648-15.598934V202.683733c0-38.650311 31.379911-70.087111 69.950577-70.087111s69.950578 31.448178 69.950578 70.087111V533.526756H119.887644v-25.201778a15.587556 15.587556 0 0 0-15.5648-15.598934A15.610311 15.610311 0 0 0 88.746667 508.336356v40.800711a15.587556 15.587556 0 0 0 15.5648 15.598933h155.477333v351.368533a15.587556 15.587556 0 0 0 23.643022 13.334756l75.662222-46.011733 75.662223 46.011733c4.960711 3.015111 11.184356 3.015111 16.156444 0l75.662222-46.011733 75.662223 46.011733c4.960711 3.015111 11.184356 3.015111 16.156444 0l75.662222-46.011733 75.662222 46.011733c4.960711 3.015111 11.172978 3.015111 16.156445 0l75.662222-46.011733 75.650845 46.011733a15.496533 15.496533 0 0 0 15.724088 0.250311 15.587556 15.587556 0 0 0 7.918934-13.585067v-238.819555c0-8.612978-6.9632-15.598933-15.5648-15.598934s-15.5648 6.985956-15.5648 15.598934v211.114666L869.603556 851.854222a15.507911 15.507911 0 0 0-16.156445 0l-75.650844 46.011734-75.662223-46.011734a15.507911 15.507911 0 0 0-16.156444 0l-75.662222 46.011734-75.650845-46.011734a15.507911 15.507911 0 0 0-16.156444 0l-75.6736 46.011734-75.662222-46.011734a15.485156 15.485156 0 0 0-16.145067 0l-60.097422 36.545422V202.683733c0-27.181511-10.763378-51.882667-28.216889-70.087111h597.071644c38.570667 0 69.9392 31.448178 69.9392 70.087111V620.202667a15.587556 15.587556 0 0 0 15.5648 15.598933z"
                                    fill=""></path>
                                <path
                                    d="M583.133867 266.023822a15.587556 15.587556 0 0 0-15.576178-15.598933H382.316089a15.587556 15.587556 0 0 0-15.5648 15.598933V516.551111a15.587556 15.587556 0 0 0 15.5648 15.610311h185.2416a15.587556 15.587556 0 0 0 15.576178-15.610311V266.023822z m-31.1296 234.928356H397.880889V281.611378h154.112v219.3408zM856.291556 563.586844H642.093511a15.587556 15.587556 0 0 0-15.576178 15.587556v125.269333a15.587556 15.587556 0 0 0 15.576178 15.598934h214.186667c8.6016 0 15.5648-6.974578 15.5648-15.598934v-125.269333c0-8.6016-6.9632-15.587556-15.553422-15.587556z m-15.576178 125.257956H657.658311v-94.071467h183.057067v94.071467zM856.291556 250.424889H642.093511a15.587556 15.587556 0 0 0 0 31.197867h214.186667a15.587556 15.587556 0 0 0 15.5648-15.598934 15.587556 15.587556 0 0 0-15.553422-15.598933zM856.291556 500.952178H642.093511a15.598933 15.598933 0 1 0 0 31.209244h214.186667a15.587556 15.587556 0 0 0 15.5648-15.610311 15.587556 15.587556 0 0 0-15.553422-15.598933zM856.291556 438.317511h-79.758223a15.587556 15.587556 0 0 0 0 31.197867h79.758223c8.6016 0 15.553422-6.985956 15.553422-15.598934a15.587556 15.587556 0 0 0-15.553422-15.598933zM642.093511 469.515378h77.471289a15.587556 15.587556 0 0 0 0-31.197867h-77.471289a15.587556 15.587556 0 0 0 0 31.197867zM856.291556 375.694222H642.093511a15.587556 15.587556 0 0 0 0 31.197867h214.186667a15.587556 15.587556 0 0 0 15.5648-15.598933c0-8.624356-6.9632-15.598933-15.553422-15.598934zM382.316089 732.376178h185.2416a15.587556 15.587556 0 0 0 0-31.186489H382.316089a15.587556 15.587556 0 0 0 0 31.186489zM567.557689 638.555022h-66.753422c-8.6016 0-15.5648 6.974578-15.5648 15.598934a15.587556 15.587556 0 0 0 15.5648 15.598933h66.753422a15.587556 15.587556 0 0 0 0-31.197867zM382.316089 669.752889h61.531022a15.587556 15.587556 0 0 0 15.5648-15.598933 15.587556 15.587556 0 0 0-15.5648-15.598934h-61.531022a15.587556 15.587556 0 0 0-15.5648 15.598934 15.576178 15.576178 0 0 0 15.5648 15.598933zM567.557689 575.920356H382.316089a15.587556 15.587556 0 0 0 0 31.186488h185.2416a15.587556 15.587556 0 0 0 0-31.186488zM856.291556 313.059556h-13.676089a15.587556 15.587556 0 0 0-15.5648 15.598933 15.587556 15.587556 0 0 0 15.5648 15.598933h13.676089c8.6016 0 15.553422-6.985956 15.553422-15.598933 0-8.624356-6.9632-15.598933-15.553422-15.598933zM642.093511 344.246044h143.553422a15.587556 15.587556 0 0 0 15.5648-15.598933 15.587556 15.587556 0 0 0-15.5648-15.598933H642.093511a15.587556 15.587556 0 0 0 0 31.197866z"
                                    fill=""></path>
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Berita</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kenangan') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="-ml-1 h-6 w-6" fill="#000000" viewBox="0 0 24 24" id="contact-book"
                            data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line ">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="secondary"
                                    d="M18,3H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1V4A1,1,0,0,0,18,3ZM14,16H8V15a3,3,0,0,1,3-3,2,2,0,1,1,2-2,2,2,0,0,1-2,2,3,3,0,0,1,3,3Z"
                                    style="fill: #A28989; stroke-width: 2;"></path>
                                <path id="primary"
                                    d="M21,9H19V7h2Zm0,4H19v2h2ZM11,8a2,2,0,1,0,2,2A2,2,0,0,0,11,8Zm3,7a3,3,0,0,0-3-3h0a3,3,0,0,0-3,3v1h6Zm5,5V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H18A1,1,0,0,0,19,20Z"
                                    style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                </path>
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Galeri</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path class="text-[#A28989]"
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Acara</span></span>

                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.alumnus') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="iconify iconify--noto -ml-1 h-6 w-6" preserveAspectRatio="xMidYMid meet"
                            fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M99.06 91.42S83.95 105.6 63.97 105.6S28.89 91.42 28.89 91.42s-2.81-13.49 4.45-36.78c3.83-12.28 58.33-13.53 62.6-2.79c7.26 18.23 3.12 39.57 3.12 39.57z"
                                    fill="#424242"></path>
                                <path
                                    d="M28.89 91.42l4.79 3.84s-.04-7.6 2.31-14.69c.88-2.65 4.02-3.76 6.38-2.27l18.29 11.47a6.389 6.389 0 0 0 6.7.05c8.74-5.3 31.54-19.17 32.58-20.02c0 0 0-1.71-.43-3.89L28.63 66l.26 25.42z"
                                    fill="#212121"></path>
                                <path
                                    d="M122.81 52.03l-56.8 33.83c-1.24.74-2.79.74-4.04 0L5.19 52.03c-1.58-.94-1.58-3.23 0-4.17l56.8-33.83c1.24-.74 2.79-.74 4.04 0l56.8 33.83c1.57.94 1.57 3.23-.02 4.17z"
                                    fill="#424242"></path>
                                <path
                                    d="M64.04 83.38c-.01 0-.03.01-.04.01c-.16 0-.32-.04-.46-.13L4.18 49.04s-.29.55 0 1.54c.3.99.76 1.31 1.01 1.46l56.8 33.83c.62.37 1.32.56 2.02.56h.04v-3.05z"
                                    fill="#9e9e9e"></path>
                                <path
                                    d="M64 83.38c.01 0 .03.01.04.01c.16 0 .32-.04.46-.13l59.36-34.22s.29.55 0 1.54c-.3.99-.76 1.31-1.01 1.46l-56.8 33.83c-.62.37-1.32.56-2.02.56h-.04v-3.05z"
                                    fill="#616161"></path>
                                <path
                                    d="M35.45 70.06l.32-2.81S60.28 53.92 62.7 52.52c2.42-1.4 4.96-2.96 6.09-4.21c2-2.2.56-3.58.56-3.58s-1.58 2.56-5.35 2.11c-2.16-.26-4.97-2.01-5.44-2.83s-27.67 19.9-27.67 19.9l-.19 3.33l4.75 2.82z"
                                    fill="#424242"></path>
                                <path
                                    d="M69.35 44.74c-2.62 3.66-7.06 2.06-7.06 2.06s-13.91 6.67-14.43 5.66s11.49-7.19 11.49-7.19s-.67-2.46-.6-3.51c0 0-21.72 13.82-29.87 18.47c-4.27 2.44-5.18 4.74-5.17 7.98c0 1.42.02 6.03.04 8.78c0 .51-.22.99-.61 1.31a5.162 5.162 0 0 0-1.89 3.99c0 1.53.67 2.9 1.73 3.85c.57.51.45 1.61.5 2.32c.1 1.36 0 1.98-.56 3.24c-.55 1.23-1.06 2.49-1.41 3.79c-.27 1-.45 2.03-.63 3.05c-1.19 6.83-1.73 14.13-4.88 20.41a.993.993 0 0 0 .45 1.34a1.007 1.007 0 0 0 1.35-.44c1.64-3.27 2.49-6.85 3.19-10.4c-.04 3.21-.06 6.45-.17 9.95c-.02.68-.07 2.05.55 2.35c2.33 1.13 2.33-2.35 2.33-2.35s.03 3.13 3.2 3.13s3.4-3.13 3.4-3.13s.23 2.87 1.86 2.73c.66-.06 1.53-.46 1.22-3.89c-.31-3.42-1.08-15.68-1.41-19.56c-.46-5.37-2.22-8.56-2.58-10.46c-.13-.72-.14-1.47.43-1.94a5.165 5.165 0 0 0 .13-7.88a1.71 1.71 0 0 1-.58-1.42c.19-2.59.4-6.35.57-7.22c.74-3.91 2.67-4.61 4.65-5.77c1.98-1.17 30.66-14.19 32.33-15.3c3.09-2.07 2.43-3.95 2.43-3.95z"
                                    fill="#e2a610"></path>
                                <path
                                    d="M69.35 44.74c-2.47 3.49-7.6 1.93-7.6 1.93s-13.11 5.81-12.24 4.76c.86-1.05 9.84-6.16 9.84-6.16s-.67-2.46-.6-3.51c0 0-22.1 12.77-30.67 18.91c-2.21 1.59-4.95 4.19-2.72 6.78c1.03 1.19 3.02 1.44 4.29.5c.77-.56 1.37-1.38 2.05-2.03c.84-.82 1.86-1.34 2.86-1.93c1.98-1.17 30.66-14.19 32.33-15.3c3.12-2.07 2.46-3.95 2.46-3.95z"
                                    fill="#ffca28"></path>
                                <path
                                    d="M26.11 91.86c-1.32 0-2.21-.11-3.02-.3a.62.62 0 0 1-.48-.65l.26-3.82c.03-.39.4-.66.78-.55c.9.26 2.7.52 5.64-.1c.36-.08.72.17.76.54l.4 3.8c.03.31-.17.6-.47.67c-1.53.35-2.64.41-3.87.41z"
                                    fill="#9e740b"></path>
                                <path
                                    d="M99.06 91.42s1.77-9.24 1.06-19.07c-.12-1.66-1.14-3.09-1.93 2.72c-.45 3.33-1.43 13.3-3.1 19.53c2.55-1.84 3.97-3.18 3.97-3.18z"
                                    fill="#616161"></path>
                                <path
                                    d="M65.73 36.79c.73.23 1.4.79 1.59 1.54c.25 1-.38 2-1.06 2.78c-1.33 1.53-3.16 2.87-5.19 2.8c-.67-.02-1.39-.24-1.8-.77c-.29-.37-.39-.85-.42-1.32c-.18-3.43 3.7-6.03 6.88-5.03z"
                                    fill="#616161"></path>
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Alumni</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.cerita') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path class="text-[#A28989]"
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Cerita</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contact') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="-ml-1 h-6 w-6" fill="#000000" viewBox="0 0 24 24" id="contact-book"
                            data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line ">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="secondary"
                                    d="M18,3H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1V4A1,1,0,0,0,18,3ZM14,16H8V15a3,3,0,0,1,3-3,2,2,0,1,1,2-2,2,2,0,0,1-2,2,3,3,0,0,1,3,3Z"
                                    style="fill: #A28989; stroke-width: 2;"></path>
                                <path id="primary"
                                    d="M21,9H19V7h2Zm0,4H19v2h2ZM11,8a2,2,0,1,0,2,2A2,2,0,0,0,11,8Zm3,7a3,3,0,0,0-3-3h0a3,3,0,0,0-3,3v1h6Zm5,5V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H18A1,1,0,0,0,19,20Z"
                                    style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                </path>
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Kontak</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.datauser') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="-ml-1 h-6 w-6  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="0.5"
                                    d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                    fill="#A28989"></path>
                                <path
                                    d="M16.807 19.0112C15.4398 19.9504 13.7841 20.5 12 20.5C10.2159 20.5 8.56023 19.9503 7.193 19.0111C6.58915 18.5963 6.33109 17.8062 6.68219 17.1632C7.41001 15.8302 8.90973 15 12 15C15.0903 15 16.59 15.8303 17.3178 17.1632C17.6689 17.8062 17.4108 18.5964 16.807 19.0112Z"
                                    fill="#1C274C"></path>
                                <path
                                    d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3432 6 9.00004 7.34315 9.00004 9C9.00004 10.6569 10.3432 12 12 12Z"
                                    fill="#1C274C"></path>
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span
                                class="text-[#A28989]">Pendaftaran Alumni</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pengikutacara') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="-ml-1 h-6 w-6" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M106.666667 810.666667V298.666667h810.666666v512c0 46.933333-38.4 85.333333-85.333333 85.333333H192c-46.933333 0-85.333333-38.4-85.333333-85.333333z"
                                    fill="#CFD8DC"></path>
                                <path
                                    d="M917.333333 213.333333v128H106.666667v-128c0-46.933333 38.4-85.333333 85.333333-85.333333h640c46.933333 0 85.333333 38.4 85.333333 85.333333z"
                                    fill="#A28989"></path>
                                <path d="M704 213.333333m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#B71C1C">
                                </path>
                                <path d="M320 213.333333m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#B71C1C">
                                </path>
                                <path
                                    d="M704 64c-23.466667 0-42.666667 19.2-42.666667 42.666667v106.666666c0 23.466667 19.2 42.666667 42.666667 42.666667s42.666667-19.2 42.666667-42.666667V106.666667c0-23.466667-19.2-42.666667-42.666667-42.666667zM320 64c-23.466667 0-42.666667 19.2-42.666667 42.666667v106.666666c0 23.466667 19.2 42.666667 42.666667 42.666667s42.666667-19.2 42.666667-42.666667V106.666667c0-23.466667-19.2-42.666667-42.666667-42.666667z"
                                    fill="#B0BEC5"></path>
                                <path
                                    d="M277.333333 426.666667h85.333334v85.333333h-85.333334zM405.333333 426.666667h85.333334v85.333333h-85.333334zM533.333333 426.666667h85.333334v85.333333h-85.333334zM661.333333 426.666667h85.333334v85.333333h-85.333334zM277.333333 554.666667h85.333334v85.333333h-85.333334zM405.333333 554.666667h85.333334v85.333333h-85.333334zM533.333333 554.666667h85.333334v85.333333h-85.333334zM661.333333 554.666667h85.333334v85.333333h-85.333334zM277.333333 682.666667h85.333334v85.333333h-85.333334zM405.333333 682.666667h85.333334v85.333333h-85.333334zM533.333333 682.666667h85.333334v85.333333h-85.333334zM661.333333 682.666667h85.333334v85.333333h-85.333334z"
                                    fill="#90A4AE"></path>
                            </g>
                        </svg>
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Data <span class="text-[#A28989]">Pengikut
                                Acara</span></span>
                    </a>
                </li>

            </ul>
            <ul class="mt-52">
                <li>
                    <a href="{{ route('admin.logout') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="ms-2 text-gray-500 font-semibold">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>


    </div>

    <!-- Mobile Sidebar -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
