<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<link href="{{asset('public/assets/css/mail.css')}}" rel="stylesheet" type="text/css" />

<body>
    @if($level=="gold")
    <div class="container">
        <img src="{{asset('public/assets/imgages/Welcome_card_wallpaper_for_Gold_IPACK.jpeg')}}" alt="" />
        <div class="txt">
            <center>
                <div class="title">THANK YOU.</div>
            </center>

            <center>
                <strong>
                    <div class="sub-title">Your subscription has been successful!</div>
                </strong>
            </center>

            <div class="text.ellipsis">
                <div class="text-concat description">
                    <p>Dear {{ $first_name }} {{ $last_name }}</p>
                    <p>
                        Thank you for your subscription to the Online IELTS Tips &
                        Practice reserved by NewCambridge Thailand. You have now become
                        our Gold member. Please study the Online IELTS Tips & Practice
                        navigator attached for your convenience of exploring the services
                        provided Online
                    </p>
                    <p>
                        Please be iinformed thit your subscription is valid until {{ $expire_date }} You can now access our IELTS-focused online
                        practice via the link below.
                    </p>
                    <p>
                        Bast regards,
                        <br />
                        New Cambride Thailand
                    </p>
                    <p>
                        Navigator for All Level:&nbsp;
                        <a href="{{asset('public/assets/pdf/IPACK_Navigator_for_All_Levels.pdf')}}">Download</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @elseif($level=="platinum")
    <div class="container">
        <img src="{{asset('public/assets/imgages/Welcome_card_wallpaper_for_Platinum_IPACK.jpeg')}}" alt="" />
        <div class="txt">
            <center>
                <div class="title">THANK YOU.</div>
            </center>

            <center>
                <strong>
                    <div class="sub-title">Your subscription has been successful!</div>
                </strong>
            </center>

            <div class="text.ellipsis">
                <div class="text-concat description">
                    <p>Dear {{ $first_name }} {{ $last_name }}</p>
                    <p>
                        Thank you for your subscription to the Online IELTS Tips &
                        Practice reserved by NewCambridge Thailand. You have now become
                        our Platinum member. Please study the Online IELTS Tips & Practice
                        navigator attached for your convenience of exploring the services
                        provided Online
                    </p>
                    <p>
                        Please be iinformed thit your subscription is valid until {{ $expire_date }} You can now access our IELTS-focused online
                        practice via the link below.
                    </p>
                    <p>
                        Bast regards,
                        <br />
                        New Cambride Thailand
                    </p>
                    <p>
                        Navigator for All Level:&nbsp;
                        <a href="{{asset('public/assets/pdf/IPACK_Navigator_for_All_Levels.pdf')}}">Download</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>

</html>