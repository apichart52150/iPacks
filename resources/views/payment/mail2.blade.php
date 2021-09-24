<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<link href="{{asset('public/assets/css/mail.css')}}" rel="stylesheet" type="text/css" />

<style>
    @font-face {
    font-family: font_forte;
    src: url("https://www.dropbox.com/s/yc0u4g3ss3e9o4m/FORTE.TTF?dl=0");
    font-weight: normal;
    font-style: normal;
  }
  @font-face {
    font-family: font_sukhumvit;
    src: url("https://www.dropbox.com/s/csf1zw33xati7ze/SukhumvitSet-Thin.ttf?dl=0");
    font-weight: normal;
    font-style: normal;
  }
  body {
    padding: 10%;
  }
  .container {
    position: relative;
    color: white;
  }
  img {
    width: 100%;
  }
  a{
      color: white;
  }
  .txt {
    position: absolute;
    top: 5%;
    left: 20%;
    right: 7%;
  }
  .title {
    font-family: font_forte;
    font-size: 100vw;
    margin: 0;
    padding: 0;
  }
  .sub-title {
    font-family: font_sukhumvit;
    font-size: 3.3vw;
  }
  .description {
    font-family: font_sukhumvit;
    font-size: 1.8vw;
  }
  .text-concat {
    content: "...";
    position: absolute;
    right: -12px;
    bottom: 4px;
  }
  .text-concat {
    position: relative;
    display: inline-block;
    word-wrap: break-word;
    overflow: hidden;
    max-height: 100%;
    line-height: 1.2em;
    text-align: justify;
  }
</style>

<body>
    @if($level=="gold")
    <div class="container">
        <img src="https://image.freepik.com/free-vector/flat-geometric-background_23-2148957201.jpg" alt="image" />
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
                        <a href="https://www.dropbox.com/s/v00z0vq5ffgq4vw/IPACK_Navigator_for_All_Levels.pdf?dl=0">Download</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @elseif($level=="platinum")
    <div class="container">
        <img src="https://www.dropbox.com/s/f2c6icv3ibkrgks/Welcome_card_wallpaper_for_Platinum_IPACK.jpeg?dl=0" alt="" />
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
                        <a href="https://www.dropbox.com/s/v00z0vq5ffgq4vw/IPACK_Navigator_for_All_Levels.pdf?dl=0">Download</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>

</html>