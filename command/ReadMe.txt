https://vnshares.com/laravel-va-nhung-khai-niem-can-biet/
https://chungnguyen.xyz/posts/code-laravel-voi-sublime-text-editor
https://viblo.asia/p/toi-uu-lai-code-laravel-cua-chinh-minh-eW65GwGJ5DO
https://chungnguyen.xyz/posts/code-laravel-lam-sao-cho-chuan

Add new
composer require barryvdh/laravel-ide-helper
composer require barryvdh/laravel-debugbar --dev
composer require rap2hpoutre/laravel-log-viewer

Re-Index Sublime Text
Delete %userprofile%\.codeintel

-----------------------------------------------------------------------------
Các Pattern Design :
- Factory
Factory ở đây có thể hiểu nôm na là nhà máy. Theo định nghĩa từ Wikipedia, Factory chính là một đối tượng dùng để khởi tạo các đối tượng khác, thường thì factory sẽ là một hàm hay một phương thức trả về các đối tượng của một vài class khác nhau.

- Repository
Repository đóng vai trò là một lớp kết nối giữa tầng Business và Model của ứng dụng.
Cấu trúc gồm 4 class chính
(1) Contracts\Repositories\Repository		(Interface) - Khai báo hàm nền tảng
(2) Contracts\Repositories\EloquentRepository	(Abstract) implements (1) - Xử lý chi tiết hàm nền tảng	
(3) Contracts\Repositories\CategoryRepository	(Interface) - Khai báo các hàm custome
(4) Repositories\CategoryRepository		(Overide) extends (3) implements (2) - Xử lý chi tiết hàm custome
Chỉ cần Inject class Contracts (Interface) (3) vào tầng Business là sử dụng được, 
không bị ràng buộc bởi xử lý nền tảng(1-2) và xử lý logic chi tiết (4)
Có nghĩa là có thể thay đổi xử lý độc lập cho các nhom  (1), (2), (4) mà không ảnh hưởng tầng Business

https://viblo.asia/p/the-repository-design-pattern-AeJ1vONQGkby
https://techblog.vn/repository-pattern-trong-laravel

- Singleton

-----------------------------------------------------------------------------
1) Luôn sử dụng Contracts (Interface) trong Facades
Chú ý phương pháp DEPENDENCY INJECTION

2) Trong class Facades luôn sử dụng 
return \App::make('xxx')
Vì có thể dùng chung để tạo Facades cho phương thức Bind và SingleTon

3) Sự khác biệt của Bind và SingleTon
Bind : Khi sử dụng luôn trả ra 1 đối tượng mới
SingleTon : Khi sử dụng luôn là ghi đè 1 đối tượng duy nhất

4) Xử lý mảng luôn đưa vào đối tượng Collection
use Illuminate\Support\collection;
$collection= collect([]);
// hoặc
$collection=conlection::make([]);

5) Truy cập setting trong thư mục /config bằng cách:
\Config::get('cache')
\Config::get('cache.stores')

-----------------------------------------------------------------------------
VueJS syntax:
v-bind
v-on
v-show (Vẫn có tồn tại trong hmtl chỉ đang set display:none;)
v-if
v-else
v-else-if
v-for="item in list"
v-for="(item, index) in list"
v-for="(list, key, index) in object"
v-for="i in 10"
v-for="item in call_function(param)"
v-model
v-bind:true-value
v-bind:false-value







