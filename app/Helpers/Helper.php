<?php

namespace App\Helpers;

class Helper{
    public static function showListDes($lists)
    {
        $html = '';
        foreach ($lists as $key => $list) {
            $html .= '
                <tr>
                    <td>' . $list->id . '</td>
                    <td><img src="' . $list->file . '" width="200px"></td>
                    <td>' . $list->name . '</td>
                    <td>' . self::area($list->area) . '</td>
                    <td>' . self::status($list->status) . '</td>
                    <td>
                        <div class="flex align-items-center list-user-action">
                            <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Sửa"
                                href="/admin/destinations/edit/' . $list->id . '">
                                <i class="ri-pencil-line"></i>
                            </a>
                            <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Xoá" 
                                href="#" onclick="delRow(' . $list->id . ', \'/admin/destinations/delDestination\')">
                                <i class="ri-delete-bin-line"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            ';
            unset($lists[$key]);
        }
        return $html;
    }

    public static function status($status = 0) : string
    {
        return $status == 0 ? '<span class="btn btn-danger new" style="font-weight: bold">TẮT</span>' 
                            : '<span class="btn btn-success new" style="font-weight: bold">BẬT</span>';
    }

    public static function admin($admin = 0) : string
    {
        return $admin == 0 ? '<span class="btn btn-dark" style="font-weight: bold">Khách</span>' 
                            : '<span class="btn btn-primary" style="font-weight: bold">Admin</span>';
    }

    public static function area($area = 0) : string
    {
        return $area == 0 ? 'Trong nước' : 'Nước ngoài';
    }

    public static function showListTour($tours)
    {
        $html = '';
        foreach ($tours as $key => $tour) {
            $html .= '
                <tr>
                    <td style="text-align:center">' . $tour->id . '</td>
                    <td style="text-align:center"><img src="' . $tour->file . '" width="130px"></td>
                    <td><a href="/admin/tours/id-' . $tour->id . '/' . $tour->url . '" class="link-name">' . $tour->name . '</a></td>
                    <td style="text-align:center">' . $tour->destination->name . '</td>
                    <td style="text-align:center">' . $tour->time . '</td>
                    <td><div class="shortenedText">' . $tour->description . '</div></td>
                    <td style="text-align:center">' . self::price($tour->price) . '</td>
                    <td style="text-align:center">' . self::price($tour->price_child) . '</td>
                    <td style="text-align:center">' . self::status($tour->status) . '</td>
                    <td style="text-align:center">
                        <div class="flex align-items-center list-user-action">
                            <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Sửa"
                                href="/admin/tours/edit-tour/' . $tour->id . '">
                                <i class="ri-pencil-line"></i>
                            </a>
                            <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Xoá" 
                                href="#" onclick="delRow(' . $tour->id . ', \'/admin/tours/delTour\')">
                                <i class="ri-delete-bin-line"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            ';
            unset($tours[$key]);
        }
        return $html;
    }

    public static function showInSidebar($tours)
    {
        $html = '';
        foreach ($tours as $key => $tour) {
            $html .= '
                <li class="navbar__menu-item">
                    <div style="background-image: url(' . $tour->file . ');" class="navbar__menu-item-img"></div>
                    <div class="navbar__menu-item-info">
                        <a href="/tour-'. $tour->id .'/' .$tour->url . '.html" class="navbar__menu-item-city" id="shortText" title="' . $tour->name . '">' . $tour->name . '</a>
                        <a href="/tour-'. $tour->id .'/' .$tour->url . '.html" class="navbar__menu-item-location">
                            <i class="navbar__menu-item-location-icon fas fa-map-marker-alt"></i>
                            ' . $tour->destination->name . '
                        </a>
                        <a href="/tour-'. $tour->id .'/' .$tour->url . '.html" class="navbar__menu-item-price" style="--background-color:var(--yellow-grad)">
                            '. self::price($tour->price) . '
                        </a>
                    </div>
                </li>
            ';
            unset($tours[$key]);
        }
        return $html;
    }

    public static function price($price = 0, $price_child = 0)
    {
        if ($price != 0 || $price_child != 0) return str_replace(',', '.', number_format($price));
        return '<a href="lien-he.html" style="color: red">Liên hệ</a>';
    }
}