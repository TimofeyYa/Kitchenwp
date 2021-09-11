<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen</title>
    <link rel="stylesheet" href="./Fonts/BebasNeue/stylesheet.css">
    <link rel="stylesheet" href="./Fonts/Stolzl/stylesheet.css">
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/media.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.0/lottie.js'></script>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <img src="./Source/other/logo.png" alt="Logo">
            </div>
            <nav class="header__nav">
                <ul>
                    <li class="header__nav-item" id="btnItems">Продукция</li>
                    <li class="header__nav-item" id="btnPerks">Преимущества</li>
                    <li class="header__nav-item" id="btnProd">Производство</li>
                    <li class="header__nav-item" id="btnLog">Логистика</li>
                    <li class="header__nav-item" id="btnContacts">Контакты</li>
                    <li class="header__nav-item header__nav-itemCost" id="btnBuy">Заказать</li>
                </ul>
                <img src="./Source/other/logo.png" class="header__nav-logo" alt="Logo">
                <div class="header__nav-exit">
                    <svg id="Layer_1" height="512" viewBox="0 0 150 150" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m115.736 140h-81.472a24.292 24.292 0 0 1 -24.264-24.264v-81.472a24.292 24.292 0 0 1 24.264-24.264h81.472a24.292 24.292 0 0 1 24.264 24.264v81.472a24.292 24.292 0 0 1 -24.264 24.264zm-81.472-128a22.288 22.288 0 0 0 -22.264 22.264v81.472a22.288 22.288 0 0 0 22.264 22.264h81.472a22.289 22.289 0 0 0 22.264-22.264v-81.472a22.289 22.289 0 0 0 -22.264-22.264z"/><path d="m38.667 112.333a1 1 0 0 1 -.708-1.707l72.667-72.666a1 1 0 0 1 1.414 1.414l-72.666 72.666a1 1 0 0 1 -.707.293z"/><path d="m111.333 112.333a1 1 0 0 1 -.707-.293l-72.667-72.666a1 1 0 1 1 1.415-1.414l72.666 72.666a1 1 0 0 1 -.707 1.707z"/></svg>
                </div>
            </nav>
            <div class="header__inst">
                <a target="_blank" href="">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path
                            d="M9.50313 4.62207C6.80909 4.62207 4.62805 6.80549 4.62805 9.49715C4.62805 12.1912 6.81147 14.3722 9.50313 14.3722C12.1972 14.3722 14.3782 12.1888 14.3782 9.49715C14.3782 6.80311 12.1948 4.62207 9.50313 4.62207ZM9.50313 12.6614C7.75434 12.6614 6.33884 11.2452 6.33884 9.49715C6.33884 7.74915 7.75513 6.33286 9.50313 6.33286C11.2511 6.33286 12.6674 7.74915 12.6674 9.49715C12.6682 11.2452 11.2519 12.6614 9.50313 12.6614Z"
                             />
                        <path
                            d="M13.4169 0.061146C11.6689 -0.0203957 7.33929 -0.0164374 5.58971 0.061146C4.05229 0.133188 2.69617 0.504479 1.60288 1.59777C-0.224289 3.42494 0.00925267 5.88702 0.00925267 9.49781C0.00925267 13.1933 -0.196581 15.5984 1.60288 17.3979C3.43717 19.2314 5.93488 18.9915 9.50292 18.9915C13.1636 18.9915 14.4271 18.9939 15.7215 18.4927C17.4813 17.8095 18.8098 16.2365 18.9396 13.411C19.0219 11.6622 19.0172 7.3334 18.9396 5.58381C18.7828 2.24852 16.9929 0.225813 13.4169 0.061146ZM16.1838 16.189C14.986 17.3868 13.3243 17.2799 9.47996 17.2799C5.52163 17.2799 3.93434 17.3385 2.77613 16.1771C1.44217 14.8495 1.68363 12.7175 1.68363 9.48515C1.68363 5.11119 1.23475 1.96115 5.62454 1.73631C6.63313 1.70069 6.93 1.68881 9.46888 1.68881L9.5045 1.71256C13.7233 1.71256 17.0333 1.27081 17.232 5.65981C17.2771 6.66127 17.2874 6.96211 17.2874 9.49702C17.2866 13.4094 17.361 15.0062 16.1838 16.189Z"
                             />
                        <path
                            d="M14.5713 5.56894C15.2005 5.56894 15.7105 5.0589 15.7105 4.42973C15.7105 3.80057 15.2005 3.29053 14.5713 3.29053C13.9422 3.29053 13.4321 3.80057 13.4321 4.42973C13.4321 5.0589 13.9422 5.56894 14.5713 5.56894Z"
                             />
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="19" height="19" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                </a>
            </div>
            <div class="header__mobbtn">
                <svg width="39" height="14" viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" width="24" height="5" fill="#212225"/>
                    <rect y="9" width="39" height="5" fill="#212225"/>
                </svg>                    
            </div>
        </div>
    </header>