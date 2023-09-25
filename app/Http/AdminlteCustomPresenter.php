<?php

namespace App\Http;

use Nwidart\Menus\Presenters\Presenter;

class AdminlteCustomPresenter extends Presenter
{
    /**
     * {@inheritdoc }.
     */
    public function getOpenTagWrapper()
    {
        return PHP_EOL . '<div class="menu menu-column menu-rounded menu-sub-indention px-3" data-widget="tree" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">' . PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getCloseTagWrapper()
    {
        return PHP_EOL . '</div>' . PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithoutDropdownWrapper($item)
    {
        return  '<div class="menu-item ">
            <a class="menu-link ' . $this->getActiveState($item) . '" href="' . $item->getUrl() . '" ' . $item->getAttributes() . '>
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-2">
                    ' . $item->getIcon() . '
                    </span>
                </span>
                <span class="menu-title">' . $item->title . '</span>
            </a>
        </div>';
       // return '<div class="menu-item" ' . $this->getActiveState($item) . '><a href="' . $item->getUrl() . '" ' . $item->getAttributes() . '>' . $item->getIcon() . ' <span>' . $item->title . '</span></a></li>' . PHP_EOL;
    }

    /**
     * {@inheritdoc }.
     */
    public function getActiveState($item, $state = ' show')
    {
        return $item->isActive() ? $state : null;
    }

    /**
     * Get active state on child items.
     *
     * @param $item
     * @param string $state
     *
     * @return null|string
     */
    public function getActiveStateOnChild($item, $state = 'active')
    {
        return $item->hasActiveOnChild() ? $state : null;
    }

    /**
     * {@inheritdoc }.
     */
    public function getDividerWrapper()
    {
        return '<li class="divider"></li>';
    }

    /**
     * {@inheritdoc }.
     */
    public function getHeaderWrapper($item)
    {
        return '<li class="header">' . $item->title . '</li>';
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithDropDownWrapper($item)
    {
        return '<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
                <span class="menu-link p-title-slider' . $this->getActiveStateOnChild($item, ' show') . '">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
                            ' . $item->getIcon() . '
                        </span>
                    </span>
                    <span class="menu-title">' . $item->title . '</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion ' . $this->getActiveStateOnChild($item, ' show') . '">
                    ' . $this->getChildMenuItems($item) . '
                </div>
                </div>'. PHP_EOL;
    }

    /**
     * Get multilevel menu wrapper.
     *
     * @param \Nwidart\Menus\MenuItem $item
     *
     * @return string`
     */
    public function getMultiLevelDropdownWrapper($item)
    {
        return '<li class="treeview' . $this->getActiveStateOnChild($item, ' active') . '">
		          <a href="#">
					' . $item->getIcon() . ' <span>' . $item->title . '</span>
			      	<span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
			      </a>
			      <ul class="treeview-menu">
			      	' . $this->getChildMenuItems($item) . '
			      </ul>
		      	</li>'
        . PHP_EOL;
    }
}
