<?php

namespace Template;

class Template
{

    protected $data;

    public function __construct($userData)
    {

        $this->data = $userData;
    }

    public function getData()
    {

        return $this->data;
    }

    public function getWebForm()
    {

        $template = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <style>
                * {
                    box-sizing: border-box
                }
        
                body {
                    margin: 0;
                    padding: 0
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0;
                    overflow: hidden
                }
        
                @media (max-width:600px) {
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important
                    }
        
                    .mobile_hide {
                        display: none
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important
                    }
                }
            </style>
        </head>
        
        <body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='image_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='width:100%;padding-right:0;padding-left:0'>
                                                                        <div class='alignment' align='center'
                                                                            style='line-height:10px'><img
                                                                                src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                                                                style='display:block;height:auto;border:0;width:197px;max-width:100%'
                                                                                width='197' alt='enginemailer'
                                                                                title='enginemailer'></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                                                                    <strong><span style='font-size:28px;'>Nuevo
                                                                                            Formulario Web</span></strong></p>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:18px;mso-line-height-alt:18px'>
                                                                                    <span style='font-size:18px;'><strong><span
                                                                                                style>Enviado desde: {$this->getData()['ubicacion']}</span></strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                                                        <div style='font-family:Tahoma,Verdana,sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:16px;'>Se ha recibido un nuevo correo desde la siguiente url: </span></p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;</p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:14px;'><a
                                                                                            href='{$this->getData()['link']}'
                                                                                            style='text-decoration: underline; color: #003694;'>{$this->getData()['link']}</a></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Información
                                                                                            del cliente</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Nombre: </strong> {$this->getData()['nombre']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-3' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-4' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Correo: </strong> {$this->getData()['correo']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-5' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-6' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Teléfono: </strong>
                                                                                    {$this->getData()['telefono']}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-7' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Empresa: </strong> {$this->getData()['empresa']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-10' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Requerimiento: </strong> {$this->getData()['mensaje']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-11' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-12' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Intereses: </strong> {$this->getData()['intereses']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-13' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                                                                    <br></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:20px;'><strong>Inolab
                                                                                            Especialistas de
                                                                                            Servicio</strong></span><a
                                                                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                                                                        style='text-decoration: underline; color: #393a3d'></a>
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span
                                                                                        style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";

        return $template;
    }

    public function getOtherForm()
    {

        $template = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <style>
                * {
                    box-sizing: border-box
                }
        
                body {
                    margin: 0;
                    padding: 0
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0;
                    overflow: hidden
                }
        
                @media (max-width:600px) {
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important
                    }
        
                    .mobile_hide {
                        display: none
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important
                    }
                }
            </style>
        </head>
        
        <body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='image_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='width:100%;padding-right:0;padding-left:0'>
                                                                        <div class='alignment' align='center'
                                                                            style='line-height:10px'><img
                                                                                src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                                                                style='display:block;height:auto;border:0;width:197px;max-width:100%'
                                                                                width='197' alt='enginemailer'
                                                                                title='enginemailer'></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                                                                    <strong><span style='font-size:28px;'>Nuevo registro de oportunidad</span></strong></p>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                                                        <div style='font-family:Tahoma,Verdana,sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:16px;'>Se ha registrado una nueva oportunidad a través de:  </span> <b>{$this->getData()['canal']}</b></p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Información
                                                                                            del cliente</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Nombre: </strong> {$this->getData()['nombre']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-3' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-4' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Correo: </strong> {$this->getData()['correo']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-5' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-6' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Teléfono: </strong>
                                                                                    {$this->getData()['telefono']}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-7' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Empresa: </strong> {$this->getData()['empresa']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Puesto: </strong> {$this->getData()['puesto']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-10' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Requerimiento: </strong> {$this->getData()['mensaje']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-11' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-12' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Intereses: </strong> {$this->getData()['intereses']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-13' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Comentarios</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-12' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'> {$this->getData()['comentarios']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                                                                    <br></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:20px;'><strong>Inolab
                                                                                            Especialistas de
                                                                                            Servicio</strong></span><a
                                                                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                                                                        style='text-decoration: underline; color: #393a3d'></a>
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span
                                                                                        style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";

        return $template;
    }

    public function getFormExpo()
    {
        $template = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <style>
                * {
                    box-sizing: border-box
                }
        
                body {
                    margin: 0;
                    padding: 0
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0;
                    overflow: hidden
                }
        
                @media (max-width:600px) {
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important
                    }
        
                    .mobile_hide {
                        display: none
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important
                    }
                }
            </style>
        </head>
        
        <body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='image_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='width:0%;padding-right:0;padding-left:0'>
                                                                        <div class='alignment' align='center'
                                                                            style='line-height:10px'>
                                                                            <img src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                                                                style='display:block;height:60%;border:0;width:60%;max-width:60%'
                                                                                width='auto' alt='enginemailer'
                                                                                title='enginemailer'>
                                                                        </div>
                                                                    </td>
                                                                    <td class='pad'
                                                                        style='width:0%;padding-right:0;padding-left:0'>
                                                                        <div class='alignment' align='center'
                                                                            style='line-height:10px'>
                                                                                <img src='https://inolab.com/seminario-analisis-particulas/img/leiLogoLanding.png'
                                                                                style='display:block;height:60%;border:0;width:60%;max-width:60%'
                                                                                width='auto' alt='enginemailer'
                                                                                title='enginemailer'>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                                                                    <strong><span style='font-size:25px;'>Nuevo registro de asistente al seminario de Analisis de Particulas.</span></strong></p>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                                                        <div style='font-family:Tahoma,Verdana,sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:16px;'>Registro de invitado al seminario de Analisis de Particulas</span></p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Información
                                                                                            del cliente</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Nombre: </strong> {$this->getData()['name']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-3' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-4' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Correo: </strong> {$this->getData()['email']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-5' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-6' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Teléfono: </strong>
                                                                                    {$this->getData()['tel']}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-7' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Empresa: </strong> {$this->getData()['company']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Datos del Invitado: </strong> {$this->getData()['comentarios']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                                                                    <br></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:20px;'><strong>Inolab
                                                                                            Especialistas de
                                                                                            Servicio</strong></span><a
                                                                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                                                                        style='text-decoration: underline; color: #393a3d'></a>
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span
                                                                                        style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";

        return $template;
    }

    public function getFormExpoPros()
    {
        $template = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <style>
                * {
                    box-sizing: border-box
                }
        
                body {
                    margin: 0;
                    padding: 0
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0;
                    overflow: hidden
                }
        
                @media (max-width:600px) {
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important
                    }
        
                    .mobile_hide {
                        display: none
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important
                    }
                }
            </style>
        </head>
        
        <body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='image_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <td class='column column-1' width='100%'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                                <table class='image_block block-1' width='100%' border='0'
                                                                    cellpadding='0' cellspacing='0' role='presentation'
                                                                    style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                        <tr>
                                                                            <td class='pad'
                                                                                style='width:100%;padding-right:0;padding-left:0'>
                                                                                <div class='alignment' align='center'
                                                                                    style='line-height:10px'><img
                                                                                        src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                                                                        style='display:block;height:auto;border:0;width:197px;max-width:100%'
                                                                                        width='197' alt='enginemailer'
                                                                                        title='enginemailer'></div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                                                                    <strong><span style='font-size:25px;'>Nuevo registro de prospecto en ExpoFarma.</span></strong></p>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                                                        <div style='font-family:Tahoma,Verdana,sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:16px;'>Registro de prospectos en ExpoFarma:</span></p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Información
                                                                                            del cliente</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Nombre: </strong> {$this->getData()['name']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-3' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-4' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Correo Electrónico: </strong> {$this->getData()['email']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-5' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-6' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Teléfono: </strong>
                                                                                    {$this->getData()['tel']}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-7' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Empresa: </strong> {$this->getData()['company']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Puesto: </strong> {$this->getData()['job']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Comentarios:  </strong> {$this->getData()['comments']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Intereses:  </strong> {$this->getData()['interest']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                                                                    <br></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:20px;'><strong>Inolab
                                                                                            Especialistas de
                                                                                            Servicio</strong></span><a
                                                                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                                                                        style='text-decoration: underline; color: #393a3d'></a>
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span
                                                                                        style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";

        return $template;
    }
    public function getFormWebinar()
    {;
        $template = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <style>
                * {
                    box-sizing: border-box
                }
        
                body {
                    margin: 0;
                    padding: 0
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0;
                    overflow: hidden
                }
        
                @media (max-width:600px) {
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important
                    }
        
                    .mobile_hide {
                        display: none
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important
                    }
                }
            </style>
        </head>
        
        <body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='image_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <td class='column column-1' width='100%'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                                <table class='image_block block-1' width='100%' border='0'
                                                                    cellpadding='0' cellspacing='0' role='presentation'
                                                                    style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                        <tr>
                                                                            <td class='pad'
                                                                                style='width:0%;padding-right:0;padding-left:0'>
                                                                                <div class='alignment' align='center'
                                                                                    style='line-height:10px'>
                                                                                    <img src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                                                                        style='display:block;height:60%;border:0;width:60%;max-width:60%'
                                                                                        width='auto' alt='enginemailer'
                                                                                        title='enginemailer'>
                                                                                </div>
                                                                            </td>
                                                                            <td class='pad'
                                                                                style='width:0%;padding-right:0;padding-left:0'>
                                                                                <div class='alignment' align='center'
                                                                                    style='line-height:10px'>
                                                                                        <img src='https://inolab.com/assets/img/molecularDevices.png'
                                                                                        style='display:block;height:60%;border:0;width:60%;max-width:60%'
                                                                                        width='auto' alt='enginemailer'
                                                                                        title='enginemailer'>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                                                                    <strong><span style='font-size:25px;'>Nuevo registro de asistente al webinar.</span></strong></p>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                                                        <div style='font-family:Tahoma,Verdana,sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:16px;'>Registro de asistente al webinar:</span></p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Información
                                                                                            del cliente</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Nombre: </strong> {$this->getData()['name']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-3' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-4' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Correo Electrónico: </strong> {$this->getData()['email']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-5' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-6' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Teléfono: </strong>
                                                                                    {$this->getData()['tel']}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-7' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Empresa: </strong> {$this->getData()['company']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Puesto: </strong> {$this->getData()['job']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                                                                    <br></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:20px;'><strong>Inolab
                                                                                            Especialistas de
                                                                                            Servicio</strong></span><a
                                                                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                                                                        style='text-decoration: underline; color: #393a3d'></a>
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span
                                                                                        style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";

        return $template;
    }
    public function getNewProspect()
    {
        $template = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <style>
                * {
                    box-sizing: border-box
                }
        
                body {
                    margin: 0;
                    padding: 0
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0;
                    overflow: hidden
                }
        
                @media (max-width:600px) {
        
                    .image_block img.big,
                    .row-content {
                        width: 100% !important
                    }
        
                    .mobile_hide {
                        display: none
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important
                    }
                }
            </style>
        </head>
        
        <body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='image_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <td class='column column-1' width='100%'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                                <table class='image_block block-1' width='100%' border='0'
                                                                    cellpadding='0' cellspacing='0' role='presentation'
                                                                    style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                        <tr>
                                                                            <td class='pad'
                                                                                style='width:100%;padding-right:0;padding-left:0'>
                                                                                <div class='alignment' align='center'
                                                                                    style='line-height:10px'><img
                                                                                        src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                                                                        style='display:block;height:auto;border:0;width:197px;max-width:100%'
                                                                                        width='197' alt='enginemailer'
                                                                                        title='enginemailer'></div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                                                                    <strong><span style='font-size:25px;'>Oportunidad Registrada</span></strong></p>
                                                                                <p
                                                                                    style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                                                        <div style='font-family:Tahoma,Verdana,sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:16px;'>Canal de comunicación: {$this->getData()['channel']}</span></p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                                                                    &nbsp;</p>
                                                                            </div>
                                                                        </div>
                                                                     </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='0' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'
                                                                        style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                                                                    <strong><span
                                                                                            style='font-size:20px;'>Información
                                                                                            del cliente</span></strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-2' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Nombre: </strong> {$this->getData()['name']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-3' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-4' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Correo Electrónico: </strong> {$this->getData()['email']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-5' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-6' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Teléfono: </strong>
                                                                                    {$this->getData()['tel']}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-7' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Empresa: </strong> {$this->getData()['company']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Puesto: </strong> {$this->getData()['job']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Requerimiento:  </strong> {$this->getData()['comments']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='divider_block block-9' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div class='alignment' align='center'>
                                                                            <table border='0' cellpadding='0' cellspacing='0'
                                                                                role='presentation' width='100%'
                                                                                style='mso-table-lspace:0;mso-table-rspace:0'>
                                                                                <tr>
                                                                                    <td class='divider_inner'
                                                                                        style='font-size:1px;line-height:1px;border-top:1px dotted #babec5'>
                                                                                        <span>&#8202;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='text_block block-8' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:16px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p dir='ltr'
                                                                                    style='margin:0;font-size:16px;mso-line-height-alt:16.8px'>
                                                                                    <strong>Intereses:  </strong> {$this->getData()['interest']}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                            <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                                                                    <br></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0'
                                                cellspacing='0' role='presentation'
                                                style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                                                width='580'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                            <table class='text_block block-1' width='100%' border='0'
                                                                cellpadding='10' cellspacing='0' role='presentation'
                                                                style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='font-family:sans-serif'>
                                                                            <div class
                                                                                style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span style='font-size:20px;'><strong>Inolab
                                                                                            Especialistas de
                                                                                            Servicio</strong></span><a
                                                                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                                                                        style='text-decoration: underline; color: #393a3d'></a>
                                                                                </p>
                                                                                <p
                                                                                    style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                                                                    <span
                                                                                        style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>";

        return $template;
    }
    public function quizInolab()
    {


        $template = "
<!DOCTYPE html>
<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>

<head>
  <title></title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <style>
    * {
      box-sizing: border-box
    }

    body {
      margin: 0;
      padding: 0
    }

    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: inherit !important
    }

    #MessageViewBody a {
      color: inherit;
      text-decoration: none
    }

    p {
      line-height: inherit
    }

    .desktop_hide,
    .desktop_hide table {
      mso-hide: all;
      display: none;
      max-height: 0;
      overflow: hidden
    }

    @media (max-width:600px) {

      .image_block img.big,
      .row-content {
        width: 100% !important
      }

      .mobile_hide {
        display: none
      }

      .stack .column {
        width: 100%;
        display: block
      }

      .mobile_hide {
        min-height: 0;
        max-height: 0;
        max-width: 0;
        overflow: hidden;
        font-size: 0
      }

      .desktop_hide,
      .desktop_hide table {
        display: table !important;
        max-height: none !important
      }
    }
  </style>
</head>

<body style='background-color:#e3e5e8;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
  <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
    style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
    <tbody>
      <tr>
        <td>
          <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
            <tbody>
              <tr>
                <td>
                  <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0'
                    role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                    width='580'>
                    <tbody>
                      <tr>
                        <td class='column column-1' width='100%'
                          style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:5px;padding-right:5px;vertical-align:top;padding-top:45px;padding-bottom:35px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                          <table class='image_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0'>
                            <tr>
                              <td class='pad' style='width:0%;padding-right:0;padding-left:0'>
                                <div class='alignment' align='center' style='line-height:10px'>
                                  <img
                                    src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/logo_70px_1.png'
                                    style='display:block;height:60%;border:0;width:60%;max-width:60%' width='auto'
                                    alt='enginemailer' title='enginemailer'>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
            <tbody>
              <tr>
                <td>
                  <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0'
                    role='presentation'
                    style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                    width='580'>
                    <tbody>
                      <tr>
                        <td class='column column-1' width='100%'
                          style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                          <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                            <tr>
                              <td class='pad'
                                style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px'>
                                <div style='font-family:sans-serif'>
                                  <div class
                                    style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                    <p style='margin:0;font-size:15px;mso-line-height-alt:18px'>
                                      <strong><span style='font-size:25px;'>ENCUESTA DE SATISFACCIÓN.</span></strong>
                                    </p>
                                    <p style='margin:0;font-size:15px;mso-line-height-alt:14.399999999999999px'>
                                      &nbsp;
                                    </p>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                          <table class='text_block block-2' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                            <tr>
                              <td class='pad'
                                style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:10px'>
                                <div style='font-family:Tahoma,Verdana,sans-serif'>
                                  <div class
                                    style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#000;line-height:1.2;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif'>
                                    <p style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                      <span style='font-size:16px;'>Apreciable {$this->getData()['name']}
                                        {$this->getData()['lastName']} </span>
                                    </p>
                                    <p style='margin:0;font-size:14px;mso-line-height-alt:14.399999999999999px'>
                                      &nbsp;</p>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>

          <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
            <tbody>
              <tr>
                <td>
                  <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0'
                    role='presentation'
                    style='mso-table-lspace:0;mso-table-rspace:0;background-color:#eceef1;color:#000;width:580px'
                    width='580'>
                    <tbody>
                      <tr>
                        <td class='column column-1' width='100%'
                          style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:30px;padding-right:30px;vertical-align:top;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                          <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                            <tr>
                              <td class='pad'
                                style='padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:25px'>
                                <div style='font-family:sans-serif'>
                                  <div class
                                    style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                    <p style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                      <strong><span style='font-size:17px;'>Usted es lo más importante, por eso nos
                                          gustaría saber qué opina de la visita de Servicio Técnico del pasado
                                          {$this->getData()['date']}, en sus instalaciones, donde se atendió el reporte
                                          con número de folio: {$this->getData()['folio']}.
                                        </span></strong>
                                    </p>
                                    <p></p>
                                    <p style='margin:0;font-size:14px;mso-line-height-alt:16.8px'>
                                      <strong>
                                        <span style='margin-top: 10%; font-size:17px;'>
                                          <a href= '<?php echo $url ?>'>RESPONDER ENCUESTA</a>
                                        </span>
                                      </strong>
                                    </p>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
            <tbody>
              <tr>
                <td>
                  <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0'
                    role='presentation'
                    style='mso-table-lspace:0;mso-table-rspace:0;background-color:#fff;color:#000;width:580px'
                    width='580'>
                    <tbody>
                      <tr>
                        <td class='column column-1' width='100%'
                          style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:5px;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                          <table class='text_block block-1' width='100%' border='0' cellpadding='10' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                            <tr>
                              <td class='pad'>
                                <div style='font-family:sans-serif'>
                                  <div class
                                    style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#555;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                    <p style='margin:0;font-size:12px;mso-line-height-alt:14.399999999999999px'>
                                      <br>
                                    </p>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#e3e5e8'>
            <tbody>
              <tr>
                <td>
                  <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0'
                    role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:580px'
                    width='580'>
                    <tbody>
                      <tr>
                        <td class='column column-1' width='100%'
                          style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:40px;padding-bottom:40px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                          <table class='text_block block-1' width='100%' border='0' cellpadding='10' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                            <tr>
                              <td class='pad'>
                                <div style='font-family:sans-serif'>
                                  <div class
                                    style='font-size:12px;mso-line-height-alt:14.399999999999999px;color:#393a3d;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif'>
                                    <p style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                      <span style='font-size:20px;'><strong>Inolab
                                          Especialistas de
                                          Servicio</strong></span><a
                                        href='https://www.inolab.com/analisis-de-particulas.html?gclid=EAIaIQobChMI8uDsr8DP_AIVNhPUAR2LgQINEAAYAiAAEgLny_D_BwE'
                                        style='text-decoration: underline; color: #393a3d'></a>
                                    </p>
                                    <p style='margin:0;font-size:14px;text-align:center;mso-line-height-alt:16.8px'>
                                      <span style='font-size:16px;'><strong>www.inolab.com</strong></span>
                                    </p>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>";

        return $template;
    }

    // $id = $this->getData('id'); 
    $id = 1; 
    $url = "http://localhost/inolab-website/inolab-quiz2/" . $id;
}
