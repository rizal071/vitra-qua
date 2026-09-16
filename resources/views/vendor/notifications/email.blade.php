<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Verifikasi Email - Vitra Qua</title>
    <style type="text/css">
        /* RESET & BASE STYLES FOR EMAIL */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        body {
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        .wrapper {
            width: 100% !important;
            background-color: #f8fafc;
            padding: 40px 0;
        }

        .main-card {
            max-width: 560px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            border: 1px solid #e2e8f0;
        }

        /* HEADER STYLES */
        .header-bg {
            background: #1d4ed8;
            background-image: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #1e3a8a 100%);
            padding: 40px 20px;
            text-align: center;
        }

        .logo-circle {
            width: 72px;
            height: 72px;
            background-color: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            margin: 0 auto 12px auto;
            line-height: 72px;
            font-size: 36px;
            text-align: center;
        }

        .brand-title {
            font-size: 32px;
            font-weight: 800;
            margin: 0;
            padding: 0;
            color: #ffffff !important;
            text-align: center;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }

        .brand-subtitle {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            color: #bfdbfe !important;
            margin-top: 6px;
            font-weight: 700;
            text-align: center;
        }

        /* CONTENT STYLES */
        .body-content {
            padding: 40px 36px;
            text-align: center;
        }

        .greeting {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
            text-align: center;
        }

        .message-text {
            font-size: 14px;
            line-height: 1.65;
            color: #64748b;
            margin: 0 0 28px 0;
            text-align: center;
        }

        /* BUTTON STYLES */
        .btn-primary {
            background-color: #1d4ed8;
            color: #ffffff !important;
            padding: 16px 38px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 20px rgba(29, 78, 216, 0.25);
            text-align: center;
        }

        /* INFO / FALLBACK BOX */
        .info-box {
            background-color: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 16px;
            padding: 16px;
            margin-top: 32px;
            text-align: left;
            font-size: 12px;
            color: #0369a1;
            line-height: 1.5;
        }

        .info-box a {
            color: #0284c7;
            word-break: break-all;
            font-weight: 600;
        }

        /* FOOTER */
        .footer {
            background-color: #f8fafc;
            padding: 24px 30px;
            text-align: center;
            font-size: 12px;
            color: #94a3b8;
            border-top: 1px solid #f1f5f9;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center">

                    <!-- CONTAINER KARTU UTAMA -->
                    <div class="main-card">

                        <!-- HEADER BIRU UTAMA (MENGGUNAKAN TABLE ALIGN CENTER UNTUK BULLETPROOF CENTERING) -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation"
                            class="header-bg">
                            <tr>
                                <td align="center" style="text-align: center;">

                                    <!-- LOGO BULAT -->
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                        align="center" style="margin: 0 auto;">
                                        <tr>
                                            <td align="center" class="logo-circle">
                                                💧
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- BRAND TITLE -->
                                    <h1 class="brand-title">Vitra Qua</h1>

                                    <!-- SUBTITLE -->
                                    <div class="brand-subtitle">NATURAL SPRING WATER</div>

                                </td>
                            </tr>
                        </table>

                        <!-- BODY KONTEN -->
                        <div class="body-content">
                            <div class="greeting">
                                @if (!empty($greeting))
                                    {{ $greeting }}
                                @else
                                    @if ($level === 'error')
                                        Ups!
                                    @else
                                        Halo!
                                    @endif
                                @endif
                            </div>

                            <p class="message-text">
                                Terima kasih telah bergabung dengan <strong>Vitra Qua</strong>.<br>
                                Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda dan mengaktifkan
                                akun.
                            </p>

                            <!-- TOMBOL VERIFIKASI UTAMA -->
                            @if (isset($actionText))
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation"
                                    style="margin: 28px 0;">
                                    <tr>
                                        <td align="center">
                                            <a href="{{ $actionUrl }}" class="btn-primary" target="_blank"
                                                rel="noopener">
                                                {{ $actionText }} &rarr;
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            @endif

                            <p class="message-text" style="font-size: 13px; margin-bottom: 0;">
                                Jika Anda tidak merasa membuat akun di Vitra Qua, abaikan email ini.
                            </p>
                        </div>

                        <!-- FOOTER HAK CIPTA -->
                        <div class="footer">
                            &copy; {{ date('Y') }} Vitra Qua. All Rights Reserved.<br>
                            Layanan antar air minum murni & alami langsung ke tempat Anda.
                        </div>

                    </div>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>
