<?php
function formatArticle($type,$article){
    $html = "";
    switch($type){
        case "left" :
            $html = '
<div id="data1" mc:repeatable="Select" mc:variant="Article Image On The Left">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="padding: 0px 40px 40px 40px;">
        <tr>
            <td class="p0-15-30">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th class="column" width="260" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
                                        <!-- Image Info 1 -->
                                        <img src="'.$article['src'].'" style="border-radius: 16px; object-fit: cover;" width="260" height="390" border="0" alt="Centre d\'usinage Dubus." /></a> <!--"images/dubus.svg"-->

                                    </td>
                                </tr>
                            </table>
                        </th>
                        <th style="padding-bottom:0px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="50"></th>
                        <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="h2" style="padding-bottom: 20px; color:#444444; font-family:\'Yantramanav\', Arial, sans-serif; font-size:40px; line-height:46px; text-align:left; font-weight:300;">
                                        '.$article['title'].'
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text center" style="padding-bottom: 15px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:22px; min-width:auto !important; text-align:left;">
                                        '.$article['text'].'
                                    </td>
                                </tr>
                            </table>
                        </th>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>';
            break;
        case "right" :
            $html = '
<div id="data1" mc:repeatable="Select" mc:variant="Article Image On The Left">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="padding: 0px 40px 40px 40px;">
        <tr>
            <td class="p0-15-30">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="h2" style="padding-bottom: 20px; color:#444444; font-family:\'Yantramanav\', Arial, sans-serif; font-size:40px; line-height:46px; text-align:left; font-weight:300;">
                                        '.$article['title'].'
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text center" style="padding-bottom: 15px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:22px; min-width:auto !important; text-align:left;">
                                        '.$article['text'].'
                                    </td>
                                </tr>
                            </table>
                        </th>
                        <th style="padding-bottom:0px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="50"></th>
                        <th class="column" width="260" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
                                        <!-- Image Info 3-->
                                        <img src="'.$article['src'].'" style="border-radius: 16px; object-fit: cover;" width="260" height="390" border="0" alt="Contrôle et aperçu des répertoires et des fichiers du serveur." /></a>

                                    </td> <!--src="images/database_structure1.jpeg"-->
                                </tr>
                            </table>
                        </th>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
';
            break;
        case "center" :
            $html = '
<div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
        <tr>
            <td style="padding: 0px 40px 40px 40px;" class="p0-15-30">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <!--<td class="h3 center" style="padding-bottom: 30px; color:#444444; font-family:\'Yantramanav\', Arial, sans-serif; font-size:28px; line-height:37px; font-weight:300; text-align:center;">Simplicity is the ultimate sophistication.</td>-->
                        <td style="padding-bottom: 30px; color:#444444; font-family:\'Yantramanav\', Arial, sans-serif; font-size:40px; line-height:46px; font-weight:300; text-align:center;">
                            '.$article['title'].'
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 30px; font-size:0pt; line-height:0pt; text-align:left;">
                            <img src="'.$article['src'].'" width="570" height="195" style="object-fit: cover; border-radius: 20px;" border="0" alt="" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 26px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; min-width:auto !important; text-align:justify;">
                            '.$article['text'].'
                        </td>
                    </tr>
                    <!-- Bouton Info 2 (optionnel)
                    <tr>
                        <td align="center" style="padding: 0px 40px 10px 40px;" class="p0-15-30">
                        <a href="https://doc.pcsoft.fr/fr-FR/?2030048&name=64_bits_natif_32_bits_natif_code_source_unique" target="_blank">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="text-button" style="color:#ffffff; background:#87BEE9; border-radius:5px; font-family:\'Yantramanav\', Arial, sans-serif; font-size:14px; line-height:18px; text-align:center; font-weight:500; padding:12px 25px;">
                                    <a href="https://doc.pcsoft.fr/fr-FR/?2030048&name=64_bits_natif_32_bits_natif_code_source_unique" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">
                                    EN SAVOIR PLUS
                                    </span>
                                    </a></td>																
                                </tr>
                            </table>
                        </a>
                        </td>
                    </tr> -->
                </table>
            </td>
        </tr>
    </table>
</div>';
            break;
    }
    return $html;
}
?>