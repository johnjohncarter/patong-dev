<?php

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name_en' => 'cosmetic',
                'name_ch' => '化妆',
                'name_th' => 'เเครื่องสำอาง',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'jewelry',
                'name_ch' => '饰品',
                'name_th' => 'เครื่องประดับ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'watch',
                'name_ch' => '手表',
                'name_th' => 'นาฬิกา',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'glasses',
                'name_ch' => '眼镜',
                'name_th' => 'แว่นตา',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'underwear',
                'name_ch' => '内衣',
                'name_th' => 'ชุดชั้นใน',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'perfume',
                'name_ch' => '香水',
                'name_th' => 'น้ำหอม',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'clothing/shoe',
                'name_ch' => '服装/鞋子',
                'name_th' => 'เสื้อผ้า/รองเท้า',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'electronic',
                'name_ch' => '电器',
                'name_th' => 'อุปกรณ์ไฟฟ้า',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name_en' => 'bag',
                'name_ch' => '行李箱 /包子',
                'name_th' => 'กระเป๋า/กระเป๋าเดินทาง',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        ProductCategory::query()->insert($category);
    }
}
