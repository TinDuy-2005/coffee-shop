<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $drinks = [
            ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55000', 'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.', 'image' => 'images/latte.jpg'],
            ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45000', 'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.', 'image' => 'images/americano.jpg'],
            ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60000', 'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.', 'image' => 'images/coldbrew.jpg'],
            ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' => '58000', 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.', 'image' => 'images/macchiato.jpg'],
        ];

        return view('home', ['drinks' => $drinks]);
    }

    public function about() {
        return view('about');
    }

   public function menu() {
    $drinks = [
        ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55.000', 'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.', 'image' => 'images/latte.jpg'],
        ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45.000', 'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.', 'image' => 'images/americano.jpg'],
        ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60.000', 'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.', 'image' => 'images/coldbrew.jpg'],
        ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' => '58.000', 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.', 'image' => 'images/macchiato.jpg'],
        ['id' => 5, 'name' => 'Sao Chổi Mocha', 'price' => '62.000', 'description' => 'Mocha thơm lừng với chocolate và cà phê hòa quyện.', 'image' => 'images/mocha.jpg'],
        ['id' => 6, 'name' => 'Hồ Thiên Vũ Trà Xanh', 'price' => '50.000', 'description' => 'Trà xanh mát lành, thanh lọc cơ thể và tinh thần.', 'image' => 'images/green_tea.jpg'],
        ['id' => 7, 'name' => 'Mặt Trời Smoothie', 'price' => '55.000', 'description' => 'Smoothie trái cây tươi, đầy năng lượng như ánh nắng ban mai.', 'image' => 'images/smoothie.jpg'],
        ['id' => 8, 'name' => 'Trà Đào Thiên Hà', 'price' => '52.000', 'description' => 'Trà đào thanh mát giải nhiệt, ngọt ngào vị đào tươi.', 'image' => 'images/peach-tea.jpg'],
        ['id' => 9, 'name' => 'Chocolate Siêu Tân Tinh', 'price' => '62.000', 'description' => 'Chocolate nóng/đá đậm đặc, béo ngậy cho người hảo ngọt.', 'image' => 'images/chocolate.jpg'],
        ['id' => 10, 'name' => 'Nước ép Hừng Đông', 'price' => '50.000', 'description' => 'Nước ép cam, cà rốt và dứa tươi mát, đầy năng lượng.', 'image' => 'images/juice.jpg']
      
    ];
    return view('menu', ['drinks' => $drinks]);
}

    public function beansStory() {
        $beans = [
            ['id' => 1, 'name' => 'Hạt Sao Chổi (Ethiopia)', 'origin' => 'Yirgacheffe, Ethiopia', 'notes' => 'Hương hoa nhài, vị chua thanh của quả mọng.', 'image' => 'images/ethiopia.jpg'],
            ['id' => 2, 'name' => 'Hạt Thiên Thạch (Colombia)', 'origin' => 'Huila, Colombia', 'notes' => 'Vị ngọt caramel, sô cô la và một chút hương cam.', 'image' => 'images/colombia.jpg'],
        ];
        return view('beans-story', ['beans' => $beans]);
    }

    public function contact() {
        return view('contact');
    }
    public function showDrink($id)
{
    $drinks = [
        ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55.000', 'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.', 'image' => 'images/latte.jpg'],
        ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45.000', 'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.', 'image' => 'images/americano.jpg'],
        ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60.000', 'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.', 'image' => 'images/coldbrew.jpg'],
        ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' => '58.000', 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.', 'image' => 'images/macchiato.jpg'],
        ['id' => 5, 'name' => 'Sao Chổi Mocha', 'price' => '62.000', 'description' => 'Mocha thơm lừng với chocolate và cà phê hòa quyện.', 'image' => 'images/mocha.jpg'],
        ['id' => 6, 'name' => 'Hồ Thiên Vũ Trà Xanh', 'price' => '50.000', 'description' => 'Trà xanh mát lành, thanh lọc cơ thể và tinh thần.', 'image' => 'images/green_tea.jpg'],
        ['id' => 7, 'name' => 'Mặt Trời Smoothie', 'price' => '55.000', 'description' => 'Smoothie trái cây tươi, đầy năng lượng như ánh nắng ban mai.', 'image' => 'images/smoothie.jpg'],
        ['id' => 8, 'name' => 'Trà Đào Thiên Hà', 'price' => '52.000', 'description' => 'Trà đào thanh mát giải nhiệt, ngọt ngào vị đào tươi.', 'image' => 'images/peach-tea.jpg'],
        ['id' => 9, 'name' => 'Chocolate Siêu Tân Tinh', 'price' => '62.000', 'description' => 'Chocolate nóng/đá đậm đặc, béo ngậy cho người hảo ngọt.', 'image' => 'images/chocolate.jpg'],
        ['id' => 10, 'name' => 'Nước ép Hừng Đông', 'price' => '50.000', 'description' => 'Nước ép cam, cà rốt và dứa tươi mát, đầy năng lượng.', 'image' => 'images/juice.jpg']
      
    ];

    $drink = collect($drinks)->firstWhere('id', $id);

    if (!$drink) {
        abort(404);
    }

    return view('drink', ['drink' => $drink, 'activePage' => 'menu']);
}
}
