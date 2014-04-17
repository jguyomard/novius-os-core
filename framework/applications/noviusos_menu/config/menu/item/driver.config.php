<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2014 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name' => 'driver',
    'texts' => array(
        'add' => 'Add a item',
        'new' => 'New item',
    ),
    'icon' => '',

    // Allowed EAV attributes
    'attributes' => array(),

    'view' => '',

    'admin' => array(
        'layout' => array(
            'standard' => array(
                'view'   => 'nos::form/accordion',
                'params' => array(
                    'accordions' => array(
                        'main' => array(
                            'title'  => __('Properties'),
                            'fields' => array(
                                'mitem_title',
                            ),
                        ),
                        'technical' => array(
                            'title' => __('Technical options'),
                            'fields' => array(
                                'mitem_dom_id',
                                'mitem_css_class',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'fields' => array(
            'mitem_id' => array(
                'form' => array(
                    'type' => 'hidden',
                ),
                'dont_save' => true,
            ),
            'mitem_driver' => array(
                'form' => array(
                    'type' => 'hidden',
                ),
            ),
            'mitem_title' => array(
                'label' => __('Title:'),
                'form' => array(
                    'class' => 'menu_item_title',
                ),
            ),
            'mitem_dom_id' => array(
                'label' => __('ID:'),
                'form' => array(
                    'type' => 'text',
                ),
                'expert' => true,
            ),
            'mitem_css_class' => array(
                'label' => __('CSS classes:'),
                'form' => array(
                    'type' => 'text',
                ),
                'expert' => true,
            ),
        ),
    ),
);
