<?php
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CkImageUploadController;
use App\Http\Livewire\Backend\Login\AdminLogin;
use App\Http\Livewire\Backend\AdminDashboard;
use App\Http\Livewire\Backend\Profile\AdminProfile;
use App\Http\Controllers\AdminLogoutController;
use App\Http\Livewire\Frontend\Home\Homepage;
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\BoardofGovernors;
use App\Http\Livewire\Frontend\MandatoryDisclosure;

use App\Http\Livewire\Frontend\Detail\DetailpageView;
use App\Http\Livewire\Backend\Menu\ViewMenu;
use App\Http\Livewire\Backend\Menu\EditMenu;
use App\Http\Livewire\Backend\Submenu\ViewSubMenu;
use App\Http\Livewire\Backend\Submenu\EditSubMenu;

use App\Http\Livewire\Backend\Master\ViewClass;
use App\Http\Livewire\Backend\Master\EditClass;
use App\Http\Livewire\Backend\Master\ViewSection;
use App\Http\Livewire\Backend\Master\EditSection;
use App\Http\Livewire\Backend\Facilities\ViewFacilities;
use App\Http\Livewire\Backend\Facilities\EditFacilities;
use App\Http\Livewire\Backend\Testimonials\ViewTestimonials;
use App\Http\Livewire\Backend\Testimonials\EditTestimonials;
use App\Http\Livewire\Backend\Boardmembers\ViewBoardMembers;
use App\Http\Livewire\Backend\Boardmembers\EditBoardMembers;
use App\Http\Livewire\Backend\Membership\ViewMembership;
use App\Http\Livewire\Backend\Membership\EditMemberShip;
use App\Http\Livewire\Backend\Blog\AddBlogCategory;
use App\Http\Livewire\Backend\Blog\EditBlogCategory;
use App\Http\Livewire\Backend\Blog\AddBlog;
use App\Http\Livewire\Backend\Blog\ManageBlog;
use App\Http\Livewire\Backend\Blog\EditBlog;
use App\Http\Livewire\Backend\Enquiries\EnquiryLists;
use App\Http\Livewire\Backend\Gallery\ViewGalleryCategory;
use App\Http\Livewire\Backend\Gallery\EditGalleryCategory;
use App\Http\Livewire\Backend\Gallery\ManageGallery;
use App\Http\Livewire\Backend\Gallery\EditGallery;
use App\Http\Livewire\Backend\Seo\FooterSnippets;
use App\Http\Livewire\Backend\Seo\EditFooterSnippets;
use App\Http\Livewire\Backend\Seo\HeaderSnippets;
use App\Http\Livewire\Backend\Seo\EditHeaderSnippets;



use App\Http\Livewire\Backend\Pages\CreatePage;
use App\Http\Livewire\Backend\Pages\EditPage;
use App\Http\Livewire\Backend\Slider\ViewHomeSlider;
use App\Http\Livewire\Backend\Slider\EditHomeSlider;
use App\Http\Livewire\Backend\Seo\Metadetails;
use App\Http\Livewire\Backend\Seo\EditMetadetails;
use App\Http\Livewire\Backend\Footer\ContactusView;
use App\Http\Livewire\Backend\Footer\SocialAppsManager;
use App\Http\Livewire\Backend\Footer\ViewFooterLinks;
use App\Http\Livewire\Backend\Footer\EditFooterLinks;


use App\Http\Livewire\Backend\HomeContent\First;
use App\Http\Livewire\Backend\HomeContent\FirstEdit;
use App\Http\Livewire\Backend\HomeContent\Second;
use App\Http\Livewire\Backend\HomeContent\SecondEdit;
use App\Http\Livewire\Backend\HomeContent\Edit;
use App\Http\Livewire\Backend\HomeContent\Third;
use App\Http\Livewire\Backend\HomeContent\ThirdEdit;
use App\Http\Livewire\Backend\HomeContent\Fourth;
use App\Http\Livewire\Backend\HomeContent\FourthEdit;
use App\Http\Livewire\Backend\HomeContent\Fifth;
use App\Http\Livewire\Backend\HomeContent\FifthEdit;
use App\Http\Livewire\Backend\HomeContent\Sixth;
use App\Http\Livewire\Backend\HomeContent\SixEdit;
use App\Http\Livewire\Backend\HomeContent\Seventh;
use App\Http\Livewire\Backend\HomeContent\SeventhEdit;
use App\Http\Livewire\Backend\HomeContent\Eight;
use App\Http\Livewire\Backend\HomeContent\EightEdit;
use App\Http\Livewire\Backend\HomeContent\Nineth;
use App\Http\Livewire\Backend\HomeContent\NinethEdit;
use App\Http\Livewire\Backend\HomeContent\Tenth;
use App\Http\Livewire\Backend\HomeContent\TenthEdit;
use App\Http\Livewire\Backend\Mandatory\MandatoryPublicDisclosure;
use App\Http\Livewire\Backend\Mandatory\ViewMandatoryPublicDisclosure;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
// https://ckeditor.com/ckeditor-4/download/?null-addons=
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// ============================= frontend route start  ====================== correct  i nblade 

Route::get('/language/english', [LanguageController::class,'english'])->name('english.language');

 Route::get('/language/gujrati', [LanguageController::class,'gujrati'])->name('gujrati.language');

// copy past code 
Route::get('/phpinfo', function (){
    dd(phpinfo());
    
});
/*scindia routes*/
Route::get('detail/page/{page_id}/{slug}', DetailpageView::class)->name('detail_page');
 Route::group(['middleware' => ['check-menu-route-status']], function () {
 Route::get('/', Homepage::class)->name('home.homepage');
 Route::get('/about-us', AboutUs::class)->name('home.about_us');
 Route::get('/board-of-governors', BoardofGovernors::class)->name('home.board_of_governors');
 Route::get('/mandatory-disclosure', MandatoryDisclosure::class)->name('home.mandatory_disclosure');
});





// ================ frontend route end ===============
// admin routings

include("web.admin.php");
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return redirect()->route('admin_dashboard');
    })->name('dashboard');

});

/**********
Admin Login 
***********/
Route::group(['middleware' => ['guest']], function () {
  Route::get('admin/login', AdminLogin::class)->name('admin_login');
});

/**********
Auth Routes 
***********/
Route::group(['middleware' => 'auth'],function(){
    Route::prefix('admin')->group(function(){

/*===============scindia routes========================*/
Route::get('/dashboard', AdminDashboard::class)->name('admin_dashboard');
Route::get('/profile', AdminProfile::class)->name('admin_profile');
Route::post('/admin-logout', [AdminLogoutController::class,'adminlogout'])->name('adminlogout');
Route::get('/view/menu', ViewMenu::class)->name('view_menu');
Route::get('/edit/menu/{id}', EditMenu::class)->name('edit_menu');
Route::get('/view/submenu', ViewSubMenu::class)->name('view_subnmenu');
Route::get('/edit/submenu/{id}', EditSubMenu::class)->name('edit_sub_menu');
Route::get('/view/class', ViewClass::class)->name('view_class');
Route::get('/edit/class/{id}', EditClass::class)->name('edit_class');
Route::get('/view/section', ViewSection::class)->name('view_section');
Route::get('/edit/section/{id}', EditSection::class)->name('edit_section');
Route::post('ckeditor/image_upload', [CkImageUploadController::class, 'upload'])->name('image.upload');
Route::get('/git-status', [CkImageUploadController::class, 'showGitStatus'])->name('git.status');

Route::get('/content/view', First::class)->name('view_first');
Route::get('/content/edit/{id}', FirstEdit::class)->name('edit_first');
Route::get('/principal/desk/view', Second::class)->name('view_second');
Route::get('/principal/desk/view/{id}', SecondEdit::class)->name('edit_second');
Route::get('/notice/board/view', Third::class)->name('view_third');
Route::get('/notice/board/edit/{id}', ThirdEdit::class)->name('edit_third');
Route::get('/life/skv/view', Fourth::class)->name('view_fourth');
Route::get('/life/skv/edit/{id}', FourthEdit::class)->name('edit_fourth');
Route::get('/life/skv/boarding/view', Fifth::class)->name('view_fifth');
Route::get('/life/skv/boarding/edit/{id}', FifthEdit::class)->name('edit_fifth');
Route::get('/life/skv/academics/view', Sixth::class)->name('view_sixth');
Route::get('/life/skv/academics/edit/{id}', SixEdit::class)->name('edit_sixth');
Route::get('/life/skv/heritage/view', Seventh::class)->name('view_seventh');
Route::get('/life/skv/heritage/edit/{id}', SeventhEdit::class)->name('edit_seventh');
Route::get('/life/skv/infrastructure/view', Eight::class)->name('view_eight');
Route::get('/life/skv/infrastructure/edit/{id}', EightEdit::class)->name('edit_eight');
Route::get('/life/skv/leadership/view', Nineth::class)->name('view_nineth');
Route::get('/life/skv/leadership/edit/{id}', NinethEdit::class)->name('edit_nineth');
Route::get('/life/skv/sports/view', Tenth::class)->name('view_tenth');
Route::get('/life/skv/sports/edit/{id}', TenthEdit::class)->name('edit_tenth');

Route::get('/view/facilities', ViewFacilities::class)->name('view_facilities');
Route::get('/edit/facilities/{id}', EditFacilities::class)->name('edit_facilities');

Route::get('/view/testimonials', ViewTestimonials::class)->name('view_testimonials');
Route::get('/edit/testimonials/{id}', EditTestimonials::class)->name('edit_testimonials');
Route::get('/view/news-events', ViewBoardMembers::class)->name('view_boardmembers');
Route::get('/edit/news-events/{id}', EditBoardMembers::class)->name('edit_boardmembers');
Route::get('/view/membership', ViewMembership::class)->name('view_membership');
Route::get('/edit/membership/{id}', EditMemberShip::class)->name('edit_membership');
Route::get('/contact-view', ContactusView::class)->name('contact_view');
Route::get('/social-view', SocialAppsManager::class)->name('social_view');
Route::get('/footer-quick-links', ViewFooterLinks::class)->name('footer_quick_links'); 
Route::get('/edit/footer-quick-links/{id}', EditFooterLinks::class)->name('edit_footer_quick_links'); 

Route::get('/create/page', CreatePage::class)->name('create_page');
Route::get('/edit/page/{id}', EditPage::class)->name('edit_page');
Route::get('/mandatory-form', MandatoryPublicDisclosure::class)->name('mandatory_form');
Route::get('/view-mandatory-form', ViewMandatoryPublicDisclosure::class)->name('view_mandatory_form');



Route::get('/add/blog-category', AddBlogCategory::class)->name('add_blog_category');
Route::get('/add/edit-category/{id}', EditBlogCategory::class)->name('edit_blog_category');
Route::get('/add/blog', AddBlog::class)->name('add_blog');
Route::get('/manage/blog', ManageBlog::class)->name('manage_blog');
Route::get('/edit/blog/{id}', EditBlog::class)->name('edit_blog');
 Route::get('/enquiries', EnquiryLists::class)->name('enquiries');
 Route::get('/view/category', ViewGalleryCategory::class)->name('view_category');
Route::get('/edit/category/{id}', EditGalleryCategory::class)->name('edit_category');
Route::get('/manage/gallery', ManageGallery::class)->name('manage_gallery');
Route::get('/edit/gallery/{id}', EditGallery::class)->name('edit_gallery');
Route::get('/manage/seo', Metadetails::class)->name('manage_metadata');
Route::get('/edit/seo/{id}', EditMetadetails::class)->name('edit_metadata');
Route::get('/header/snippets', HeaderSnippets::class)->name('manage_snippets');
 Route::get('/edit/header/snippets/{id}', EditHeaderSnippets::class)->name('edit_snippets');
Route::get('/footer/snippets', FooterSnippets::class)->name('manage_footer_snippets');
Route::get('/edit-footer/snippets/{id}', EditFooterSnippets::class)->name('edit_footer_snippets');
/*===============scindia routes=========================*/

 });
});
