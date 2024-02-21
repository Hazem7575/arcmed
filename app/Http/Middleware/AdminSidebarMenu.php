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
                            //$sub->url(route('admin.section.index' , ['type' => 'opinions']),'اراء الناس',['icon' => 'fa fas fa-user', 'active' => (request()->segment(2) == 'section' AND request()->query('type') == 'opinions')]);
                            $sub->url(route('admin.services.index'),'الخدمات',['icon' => 'fa fas fa-list', 'active' => request()->segment(2) == 'services']);
//                            $sub->url(route('admin.sectionService.index',['type' => 1]),'اقسام الخدمات',['icon' => 'fa fas fa-list', 'active' => request()->segment(2) == 'sectionService']);
                            $sub->url(route('admin.sectionService.index',['type' => 2]),'الاجهزة والادوات',['icon' => 'fa fas fa-list', 'active' => request()->segment(2) == 'sectionService']);
                            $sub->url(route('admin.staff.index'),'طاقم الاطباء',['icon' => 'fa fas fa-user-tie', 'active' => request()->segment(2) == 'staff']);
                            $sub->url(route('admin.clinic.index'),'العيادات',['icon' => 'fa fas fa-list', 'active' => request()->segment(2) == 'clinic']);
                            $sub->url(route('admin.connect.index'),'تواصل معنا',['icon' => 'fa fas fa-envelope', 'active' => request()->segment(2) == 'connect']);
                            $sub->url(route('admin.compain.index'),'الشكاوي',['icon' => 'fa fas fa-envelope', 'active' => request()->segment(2) == 'compain']);
                            $sub->url(route('admin.faq.index'),'الاسئلة المتكررة',['icon' => 'fa fas fa-info', 'active' => request()->segment(2) == 'faq']);
                    },
                    ['icon' => 'fa fas fa-list']
                )->order(3);
            }
            $menu->url(route('admin.lang.index'), 'اللغات', ['icon' => 'fa fas fa-language', 'active' => request()->segment(2) == 'lang'])->order(4);
            $menu->url(route('admin.setting.index'), 'اعدادت الموقع', ['icon' => 'fa fas fa-cog', 'active' => request()->segment(2) == 'setting'])->order(4);
        });

        return $next($request);
    }
}
