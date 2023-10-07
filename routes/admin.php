<?php


use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\AttributeTableController;
use App\Http\Controllers\admin\BannerCategoryController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CategoryTableController;
use App\Http\Controllers\admin\FaqCategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\OurClientController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductTableController;
use App\Http\Controllers\admin\ShopCategoryController;
use App\Http\Controllers\admin\ShopProductController;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'Dashboard'])->name('admin.Dashboard');



Route::get('/Category',[CategoryController::class,'index'])->name('webPro.category.index');
Route::get('/Category/AddToWeb',[CategoryController::class,'AddCatToWeb'])->name('webPro.category.AddCatToWeb');

Route::get('/Category/Main',[CategoryController::class,'index'])->name('webPro.category.index_Main');
Route::get('/Category/SubCategory/{id}',[CategoryController::class,'SubCategory'])->name('webPro.category.SubCategory');
Route::get('/Category/create',[CategoryController::class,'create'])->name('webPro.category.create');
Route::get('/Category/edit/{id}',[CategoryController::class,'edit'])->name('webPro.category.edit');
Route::get('/Category/destroy/{id}',[CategoryController::class,'destroy'])->name('webPro.category.destroy');
Route::post('/Category/update/{id}',[CategoryController::class,'storeUpdate'])->name('webPro.category.update');
Route::get('/Category/emptyPhoto/{id}', [CategoryController::class,'emptyPhoto'])->name('webPro.category.emptyPhoto');
Route::get('/Category/emptyIcon/{id}', [CategoryController::class,'emptyIcon'])->name('webPro.category.emptyIcon');
Route::get('/Category/Config',[CategoryController::class,'config'])->name('webPro.categoryConfig.Config');

Route::get('/Category/CatSort/{id}',[CategoryController::class,'CategorySort'])->name('webPro.category.CatSort');
Route::post('/Category/SaveSort',[CategoryController::class,'CategorySaveSort'])->name('webPro.category.CategorySaveSort');



Route::get('/Product',[ProductController::class,'index'])->name('webPro.Product.index');
Route::get('/Product/AddToWeb',[ProductController::class,'AddProToWeb'])->name('webPro.Product.AddProToWeb');

Route::get('/Product/ListCategory/{Categoryid}',[ProductController::class,'ListCategory'])->name('webPro.Product.ListCategory');
Route::get('/Product/create',[ProductController::class,'create'])->name('webPro.Product.create');
Route::get('/Product/edit/{id}',[ProductController::class,'edit'])->name('webPro.Product.edit');
Route::get('/Product/destroy/{id}',[ProductController::class,'destroy'])->name('webPro.Product.destroy');
Route::post('/Product/update/{id}',[ProductController::class,'storeUpdate'])->name('webPro.Product.update');
Route::get('/Product/emptyPhoto/{id}', [ProductController::class,'emptyPhoto'])->name('webPro.Product.emptyPhoto');

Route::get('/Product/photos/{id}',[ProductController::class,'ListMorePhoto'])->name('webPro.Product.More_Photos');
Route::post('/Product/saveSort', [ProductController::class,'sortPhotoSave'])->name('webPro.Product.sortPhotoSave');
Route::post('/Product/AddMore',[ProductController::class,'AddMorePhotos'])->name('webPro.Product.More_PhotosAdd');
Route::get('/Product/PhotoDel/{id}',[ProductController::class,'More_PhotosDestroy'])->name('webPro.Product.More_PhotosDestroy');


Route::get('/Product/TableList/{id}',[ProductTableController::class,'TableList'])->name('webPro.Product.Table_list');
Route::get('/Product/Table/edit/{id}',[ProductTableController::class,'TableEdit'])->name('webPro.Product.Table_edit');
Route::post('/Product/Table/update/{id}',[ProductTableController::class,'TableStoreUpdate'])->name('webPro.Product.Table_update');
Route::get('/Product/Table/destroy/{id}',[ProductTableController::class,'TableDestroy'])->name('webPro.Product.Table_destroy');
Route::get('/Product/Table/Sort/{project_id}',[ProductTableController::class,'TableSort'])->name('webPro.Product.Table_Sort');
Route::post('/Product/Table/SaveSort', [ProductTableController::class,'TableSortSave'])->name('webPro.Product.TableSortSave');

Route::get('/Pages', [PageController::class,'index'])->name('Pages.pageList.index');
Route::get('/Pages/create', [PageController::class,'create'])->name('Pages.pageList.create');
Route::get('/Pages/edit/{id}', [PageController::class,'edit'])->name('Pages.pageList.edit');
Route::post('/Pages/Update/{id}', [PageController::class,'storeUpdate'])->name('Pages.pageList.update');
Route::get('/Pages/delete/{id}', [PageController::class,'delete'])->name('Pages.pageList.destroy');
Route::get('/Pages/config', [PageController::class,'config'])->name('Pages.pageList.config');
Route::get('/Pages/SoftDelete/',[PageController::class,'SoftDeletes'])->name('Pages.pageList.SoftDelete');
Route::get('/Pages/restore/{id}',[PageController::class,'restored'])->name('Pages.pageList.restore');
Route::get('/Pages/force/{id}',[PageController::class,'ForceDeletes'])->name('Pages.pageList.force');
Route::get('/Pages/emptyPhoto/{id}', [PageController::class,'emptyPhoto'])->name('Pages.pageList.emptyPhoto');
Route::get('/Pages/Sort',[PageController::class,'Sort'])->name('Pages.pageList.Sort');
Route::post('/Pages/SaveSort', [PageController::class,'SaveSort'])->name('Pages.pageList.SaveSort');

Route::get('/ShopCategory',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.index');
Route::get('/ShopCategory/Main',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.index_Main');
Route::get('/ShopCategory/SubCategory/{id}',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.SubCategory');
Route::get('/ShopCategory/AddToShop',[ShopCategoryController::class,'AddCatToShop'])->name('Shop.shopCategory.AddCatToShop');
Route::get('/ShopCategory/create',[ShopCategoryController::class,'create'])->name('Shop.shopCategory.create');
Route::get('/ShopCategory/edit/{id}',[ShopCategoryController::class,'edit'])->name('Shop.shopCategory.edit');
Route::get('/ShopCategory/destroy/{id}',[ShopCategoryController::class,'destroy'])->name('Shop.shopCategory.destroy');
Route::post('/ShopCategory/update/{id}',[ShopCategoryController::class,'storeUpdate'])->name('Shop.shopCategory.update');
Route::get('/ShopCategory/emptyPhoto/{id}', [ShopCategoryController::class,'emptyPhoto'])->name('Shop.shopCategory.emptyPhoto');
Route::get('/ShopCategory/emptyIcon/{id}', [ShopCategoryController::class,'emptyIcon'])->name('Shop.shopCategory.emptyIcon');
Route::get('/ShopCategory/Config',[ShopCategoryController::class,'config'])->name('Shop.shopCategoryConfig.Config');

Route::get('/ShopCategory/CatSort/{id}',[ShopCategoryController::class,'CategorySort'])->name('Shop.shopCategory.CatSort');
Route::post('/ShopCategory/SaveSort',[ShopCategoryController::class,'CategorySaveSort'])->name('Shop.shopCategory.CategorySaveSort');


Route::get('/ShopCategory/TableList/{id}',[ShopCategoryController::class,'TableList'])->name('Shop.shopCategory.Table_list');
Route::get('/ShopCategory/Table/edit/{id}',[ShopCategoryController::class,'TableEdit'])->name('Shop.shopCategory.Table_edit');
Route::post('/ShopCategory/Table/update/{id}',[ShopCategoryController::class,'TableStoreUpdate'])->name('Shop.shopCategory.Table_update');
Route::get('/ShopCategory/Table/destroy/{id}',[ShopCategoryController::class,'TableDestroy'])->name('Shop.shopCategory.Table_destroy');
Route::get('/ShopCategory/Table/Sort/{project_id}',[ShopCategoryController::class,'TableSort'])->name('Shop.shopCategory.Table_Sort');
Route::post('/ShopCategory/Table/SaveSort', [ShopCategoryController::class,'TableSortSave'])->name('Shop.shopCategory.TableSortSave');


Route::get('/ShopProduct',[ShopProductController::class,'index'])->name('Shop.ShopProduct.index');
Route::get('/ShopProduct/AddToShop',[ShopProductController::class,'AddProToShop'])->name('Shop.ShopProduct.AddProToShop');
Route::get('/ShopProduct/ListCategory/{Categoryid}',[ShopProductController::class,'ListCategory'])->name('Shop.ShopProduct.ListCategory');
Route::get('/ShopProduct/create',[ShopProductController::class,'create'])->name('Shop.ShopProduct.create');
Route::get('/ShopProduct/edit/{id}',[ShopProductController::class,'edit'])->name('Shop.ShopProduct.edit');
Route::get('/ShopProduct/destroy/{id}',[ShopProductController::class,'destroy'])->name('Shop.ShopProduct.destroy');
Route::post('/ShopProduct/update/{id}',[ShopProductController::class,'storeUpdate'])->name('Shop.ShopProduct.update');
Route::get('/ShopProduct/emptyPhoto/{id}', [ShopProductController::class,'emptyPhoto'])->name('Shop.ShopProduct.emptyPhoto');

Route::get('/ShopProduct/photos/{id}',[ShopProductController::class,'ListMorePhoto'])->name('Shop.ShopProduct.More_Photos');
Route::post('/ShopProduct/saveSort', [ShopProductController::class,'sortPhotoSave'])->name('Shop.ShopProduct.sortPhotoSave');
Route::post('/ShopProduct/AddMore',[ShopProductController::class,'AddMorePhotos'])->name('Shop.ShopProduct.More_PhotosAdd');
Route::get('/ShopProduct/PhotoDel/{id}',[ShopProductController::class,'More_PhotosDestroy'])->name('Shop.ShopProduct.More_PhotosDestroy');


