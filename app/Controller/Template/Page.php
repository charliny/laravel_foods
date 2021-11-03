<?php

namespace App\Controller\Template;

use App\Utils\View;

class Page
{

    /** 
     * Método responsavel por retornar o header da pagina
     */
    public static function getHeader()
    {
        return View::render('template/header');
    }

    /** 
     * Método responsavel por retornar o header da pagina
     */
    public static function getFooter()
    {
        return View::render('template/footer');
    }

    /** 
     * Método responsavel por retornar pagina checkout
     */
    public static function getCheckout()
    {
        return View::render('checkout/checkout');
    }


    /** 
     * Método responsavel por retornar pagina template
     */
    public static function getPage($content)
    {
        return View::render('template/page',[
            'header'    => self::getHeader(),
            'content' => $content,
            'footer'    => self::getFooter()
        ]);
    }
}
