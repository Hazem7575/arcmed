<?php

namespace App\Traits;

use Spatie\Menu\Html;

trait Menu
{
    public $link;

    public function newLink($route , $name , $icon = null , $target = false ) {
        $html = '<div class="menu-item">
            <a class="menu-link" href="'. $route .'" '. ($target ?? "target='_blank'" ?? null) .' >
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                        '. ($icon) .'
                    </span>
                </span>
                <span class="menu-title">'. $name .'</span>
            </a>
        </div>';
        return Html::raw($html);
    }

    public function newLinkSub($route , $name , $target = false ) {
        $html = '<div class="menu-item">
                    <a class="menu-link" href="'. $route .'" '. ($target ?? "target='_blank'" ?? null) .' >
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">'. $name .'</span>
                    </a>
                </div>';
        return Html::raw($html);
    }


    public function Subrender($name , $icon = null) {
        $html = '<span class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
                            '. $icon .'
                        </span>
                    </span>
                    <span class="menu-title">'. $name .'</span>
                    <span class="menu-arrow"></span>
                </span>';
        return Html::raw($html);
    }
}
