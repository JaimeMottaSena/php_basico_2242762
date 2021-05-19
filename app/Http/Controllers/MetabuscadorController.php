<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador()
    {
        return view('metabuscador');
    }

    public function buscar()
    {

        $Termino = $_POST["Termino"];
        $Motores = $_POST["Motores"];

        switch ($Motores) {
            case 1:
                return redirect()->to("https://www.google.com/search?q=$Termino");
                break;

            case 2:
                return redirect()->to("https://www.bing.com/search?q=$Termino");
                break;

            case 3:
                return redirect()->to("https://duckduckgo.com/?q=$Termino&t=hc&va=u&ia=web");
                break;

            case 4:

                return redirect()->to("https://search.yahoo.com/search;_ylt=AwrJ7FZ_GaVgw2AADVlDDWVH;_ylc=X1MDMTE5NzgwNDg2NwRfcgMyBGZyAwRmcjIDc2ItdG9wLXNlYXJjaARncHJpZAMEbl9yc2x0AzAEbl9zdWdnAzAEb3JpZ2luA3NlYXJjaC55YWhvby5jb20EcG9zAzAEcHFzdHIDBHBxc3RybAMwBHFzdHJsAzUEcXVlcnkDcGVycm8EdF9zdG1wAzE2MjE0MzI3MTY-?q=$Termino&fr=sfp&iscqry=&fr2=sb-top-search");
                break;

            case 5:
                return redirect()->to("https://www.ask.com/web?q=$Termino&ad=dirN&o=0&qo=homepageSearchBox");
                break;

            case 6:
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$Termino&fenlei=256&rsv_pq=f7c07d95000110ef&rsv_t=0e98lb9gNB%2BZL%2FSKtnaxD0aYA033a1v7UkOPMwPo1qX9KMaJn3Equxm1rMU&rqlang=cn&rsv_enter=1&rsv_dl=tb&rsv_sug3=5&rsv_sug1=1&rsv_sug7=100&rsv_sug2=0&rsv_btype=i&prefixsug=$Termino&rsp=5&inputT=1286&rsv_sug4=1287");
                break;

            case 7:
                return redirect()->to("https://search.daum.net/search?w=tot&DA=YZR&t__nil_searchbox=btn&sug=&sugo=&sq=&o=&q=$Termino");
                break;

            case 8: // Yandex
                return redirect()->to("https://yandex.com?q=$Termino");
                break;

            case 9: // Ecosia
                return redirect()->to("https://www.ecosia.org/search?q=$Termino");
                break;

            case 10: // Aol
                return redirect()->to("https://search.aol.com/aol/search;_ylt=A2KLfSR6G6VgpHMAKDVoCWVH;_ylc=X1MDMTE5NzgwMzg4MARfcgMyBGZyAwRmcjIDc2ItdG9wLXNlYXJjaARncHJpZAMEbl9yc2x0AzAEbl9zdWdnAzAEb3JpZ2luA3NlYXJjaC5hb2wuY29tBHBvcwMwBHBxc3RyAwRwcXN0cmwDMARxc3RybAM0BHF1ZXJ5A2dhdG8EdF9zdG1wAzE2MjE0MzMyMjE-?q=$Termino&v_t=na&s_it=sb-home&iscqry=&fr=&fr2=sb-top-search");
                break;
        }
    }
}
