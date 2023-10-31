<div>
    <style>
        ul > li {
            padding-top:5px;
            padding-bottom:5px;
            padding-left:20px;
            width:90%;
            margin:0 auto;
        }
        ul > li:hover {
            background:rgba(0,255,0,0.3);
            border-radius:10px;
        }
    </style>

    <div style="position:sticky !important; top:0;min-height:100vh;min-width:270px; max-width:270px;background:#fff;margin-top:-200px;margin-left:10px;z-index:2;position:relative;border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:40px; border-bottom-right-radius:40px;">
        <div style="color:#fff;display:flex;flex-direction:column;line-height:0.5;min-height:max-content;min-width:270px; max-width:270px;background:#ea472d;overflow:none !important;z-index:3;position:relative;">
            &nbsp;
        </div>
        <div style="text-align:center;font-size:1.3rem;font-weight:bold;padding-top:10px;padding-bottom:10px;color:#fff;letter-spacing:2px;" class="acme dashboard_card-border custom_shadow dashboard_card-background2">
            Side Bar
        </div>
        <div style="padding-top:30px;" class="mont">
            <ul style="text-white; font-size:1.2rem;">
                <li>  
                    <a wire:navigate href="{{ route('dashboard') }}">
                        <div class="d-flex navLink"> 
                            <div style="margin-top:4px;margin-left:-1px;">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6V377.4c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4V134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1v-188L288 246.6v188z"/></svg>
                            </div> 
                            <div style="margin-left:13px;">
                            Dashboard
                            </div>
                        </div>   
                    </a>  
                </li>
                <li>  
                    <a wire:navigate href="{{ route('profile.edit') }}">
                        <div class="d-flex navLink"> 
                            <div style="margin-top:4px;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 16c-6.7 0-10.8-2.8-15.5-6.1C201.9 5.4 194 0 176 0c-30.5 0-52 43.7-66 89.4C62.7 98.1 32 112.2 32 128c0 14.3 25 27.1 64.6 35.9c-.4 4-.6 8-.6 12.1c0 17 3.3 33.2 9.3 48H45.4C38 224 32 230 32 237.4c0 1.7 .3 3.4 1 5l38.8 96.9C28.2 371.8 0 423.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-58.5-28.2-110.4-71.7-143L415 242.4c.6-1.6 1-3.3 1-5c0-7.4-6-13.4-13.4-13.4H342.7c6-14.8 9.3-31 9.3-48c0-4.1-.2-8.1-.6-12.1C391 155.1 416 142.3 416 128c0-15.8-30.7-29.9-78-38.6C324 43.7 302.5 0 272 0c-18 0-25.9 5.4-32.5 9.9c-4.8 3.3-8.8 6.1-15.5 6.1zm56 208H267.6c-16.5 0-31.1-10.6-36.3-26.2c-2.3-7-12.2-7-14.5 0c-5.2 15.6-19.9 26.2-36.3 26.2H168c-22.1 0-40-17.9-40-40V169.6c28.2 4.1 61 6.4 96 6.4s67.8-2.3 96-6.4V184c0 22.1-17.9 40-40 40zm-88 96l16 32L176 480 128 288l64 32zm128-32L272 480 240 352l16-32 64-32z"/></svg>
                            </div> 
                            <div style="margin-left:14px;">
                                Profile
                            </div>
                        </div>   
                    </a>  
                </li>
                <li>  
                    <a wire:navigate href="{{ route('users') }}">
                        <div class="d-flex navLink"> 
                            <div style="margin-top:5px;margin-left:-3px;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                            </div> 
                            <div style="margin-left:10px;">
                                Users
                            </div>
                        </div>   
                    </a>  
                </li>
            </ul>
        </div>
    </div>
</div>
