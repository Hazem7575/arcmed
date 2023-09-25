<?php

namespace App\Http\Middleware;

use Closure;
use Nwidart\Menus\Facades\Menu;

class AdminSidebarMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->ajax()) {
            return $next($request);
        }

        Menu::create('admin-sidebar-menu', function ($menu) {
            $menu->url(route('admin.index'), 'الرئيسية', ['icon' => 'fa fas fa-tachometer-alt', 'active' => request()->segment(2) == 'dashboard'])->order(1);
            //User management dropdown
            if (auth()->user()->can('user.view') || auth()->user()->can('user.create') || auth()->user()->can('roles.view')) {
                $menu->dropdown('المستخدمين',
                    function ($sub) {
                        if (auth()->user()->can('users.index')) {
                            $sub->url(route('admin.user.index'),'المستخدمين',['icon' => 'fa fas fa-user', 'active' => request()->segment(2) == 'user']);
                        }
                        if (auth()->user()->can('permission')) {
                            $sub->url(route('admin.permission.index'),'الصلاحيات',['icon' => 'fa fas fa-shield', 'active' => request()->segment(2) == 'permission']);
                        }
                        if (auth()->user()->can('role')) {
                            $sub->url(route('admin.role.index'),'كل الوظائف',['icon' => 'fa fas fa-user-tie', 'active' => request()->segment(2) == 'role']);
                        }
                    },
                    ['icon' => 'fa fas fa-users']
                )->order(2);
            }
            if (auth()->user()->can('section.index')) {
                $menu->dropdown('الاقسام',
                    function ($sub) {
                            $sub->url(route('admin.section.index' , ['type' => 'slider']),'الاسليدر',['icon' => 'fa fas fa-image', 'active' => (request()->segment(2) == 'section' AND request()->query('type') == 'slider')]);
                            $sub->url(route('admin.section.index' , ['type' => 'opinions']),'اراء الناس',['icon' => 'fa fas fa-user', 'active' => (request()->segment(2) == 'section' AND request()->query('type') == 'opinions')]);
                            $sub->url(route('admin.services.index'),'الخدمات',['icon' => 'fa fas fa-list', 'active' => request()->segment(2) == 'services']);
                    },
                    ['icon' => 'fa fas fa-list']
                )->order(3);
            }
            $menu->url(route('admin.lang.index'), 'اللغات', ['icon' => 'fa fas fa-language', 'active' => request()->segment(2) == 'lang'])->order(4);
        });

        return $next($request);
    }
}
