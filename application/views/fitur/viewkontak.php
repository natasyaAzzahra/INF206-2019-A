  <style>
    .header-title {
      text-align: center;
      color: #00bfff;
    }

    #tip {
      display: none;
    }

    .fadeIn {
      animation-duration: 3s;
    }

    .form-control {
      border-radius: 0px;

    }

    .textarea-contact {
      resize: none;
    }

    .btn-send {
      border-radius: 0px;
      border: 1px solid #00bfff;
      background: #00bfff;
      color: #fff;
    }

    .btn-send:hover {
      border: 1px solid #00bfff;
      background: #fff;
      color: #00bfff;
      transition: background 0.5s;
    }

    .second-portion {
      margin-top: 50px;
    }


    .box>.icon {
      text-align: center;
      position: relative;
    }

    .box>.icon>.image {
      position: relative;
      z-index: 2;
      margin: auto;
      width: 88px;
      height: 88px;
      border: 8px solid white;
      line-height: 88px;
      border-radius: 50%;
      background: #00bfff;
      vertical-align: middle;
    }

    .box>.icon:hover>.image {
      background: #333;
    }

    .box>.icon>.image>i {
      font-size: 36px !important;
      color: #fff !important;
    }

    .box>.icon:hover>.image>i {
      color: white !important;
    }

    .box>.icon>.info {
      margin-top: -24px;
      background: rgba(0, 0, 0, 0.04);
      border: 1px solid #e0e0e0;
      padding: 15px 0 10px 0;
      min-height: 163px;
    }

    .box>.icon:hover>.info {
      background: rgba(0, 0, 0, 0.04);
      border-color: #e0e0e0;
      color: white;
    }

    .box>.icon>.info>h3.title {
      font-family: "Robot", sans-serif !important;
      font-size: 16px;
      color: #222;
      font-weight: 700;
    }

    .box>.icon>.info>p {
      font-family: "Robot", sans-serif !important;
      font-size: 13px;
      color: #666;
      line-height: 1.5em;
      margin: 20px;
    }

    .box>.icon:hover>.info>h3.title,
    .box>.icon:hover>.info>p,
    .box>.icon:hover>.info>.more>a {
      color: #222;
    }

    .box>.icon>.info>.more a {
      font-family: "Robot", sans-serif !important;
      font-size: 12px;
      color: #222;
      line-height: 12px;
      text-transform: uppercase;
      text-decoration: none;
    }

    .box>.icon:hover>.info>.more>a {
      color: #fff;
      padding: 6px 8px;
      background-color: #63B76C;
    }

    .box .space {
      height: 30px;
    }

    @media only screen and (max-width: 768px) {
      .contact-form {
        margin-top: 25px;
      }

      .btn-send {
        width: 100%;
        padding: 10px;
      }

      .second-portion {
        margin-top: 25px;
      }
    }
  </style>

  <body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/8SHVwNO.jpg')"></div>
    <div class="main main-raised">
      <!-- Content -->
      <div class="container menu">
        <h2 class="fitur pt-5 text-center"><span>Hubungi Kami</span></h2>
        <div class="row align-items-center pb-2 pt-2 text-center">
          <div class="container second-portion">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                  <div class="icon">
                    <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="info">
                      <h3 class="title">EMAIL & WEBSITE</h3>
                      <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp nelayanbelajar@gmail.com
                        <br>
                        <br>
                        <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.nelayanbelajar.com
                      </p>
                    </div>
                  </div>
                  <div class="space"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                  <div class="icon">
                    <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                    <div class="info">
                      <h3 class="title">KONTAK</h3>
                      <p>
                        <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+62)-82265111111
                        <br>
                        <br>
                        <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+62)-82379898988
                      </p>
                    </div>
                  </div>
                  <div class="space"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                  <div class="icon">
                    <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="info">
                      <h3 class="title">ALAMAT</h3>
                      <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Jl. Tgk. Hasan Krueng Kalee, Kopelma Darussalam, Syiah Kuala, Kota Banda Aceh, Aceh 23111
                      </p>
                    </div>
                  </div>
                  <div class="space"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of Content -->
    </div>
  </body>