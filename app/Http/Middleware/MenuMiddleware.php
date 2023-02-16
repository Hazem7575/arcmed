<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Menu\Html;
use Spatie\Menu\Laravel\Facades\Menu;
use Spatie\Menu\Link;

class MenuMiddleware
{
    use \App\Traits\Menu;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->ajax()) {
            return $next($request);
        }



        $list = Menu::new()
            ->withoutWrapperTag()
            ->withoutParentTag()
            ->addIf(true, $this->newLink(route('admin.index'), 'الرئيسية' , '<i class="fa fa-home"></i>'))
            ->addIf(true, Menu::new()
                ->setWrapperTag('div data-kt-menu-trigger="click" class="menu-item menu-accordion"')
                ->withoutParentTag()
                ->add($this->Subrender('الاقسام', '<i class="fa fa-list"></i>'))
                ->add(Menu::new()
                    ->setWrapperTag('div class="menu-sub menu-sub-accordion"')
                    ->withoutParentTag()
                    ->addIf(true, $this->newLinkSub(route('admin.section.index' , ['type' => 'slider']) , 'الاسليدر'))
                    ->addIf(true, $this->newLinkSub(route('admin.section.index' , ['type' => 'opinions']) , 'اراء الناس'))
                )
            )
            ->addIf(true, $this->newLink(route('admin.lang.index'), 'اللغات' , '<i class="fa fa-language"></i>'))
            ;

        Menu::macro('main', function () use ($list) {
            return $list;
        });

        return $next($request);
    }
}
