<?php
use App\Models\Contact;
$list = Contact::where('status','!=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=contact&cat=process" method="post" enctype="multipart/form-data">
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả liên hệ</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
               <div class="row">
               <div div class="col-md-6">
                     <a href="index.php?option=contact" class="btn btn-sm btn-primary">Tất cả</a>
                     <a href="index.php?option=contact&cat=trash" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Thùng rác</a>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th>user_id</th>
                           <th>Họ tên</th>
                           <th>Email</th>
                           <th>Điện thoại</th>
                           <th>Tiêu đề</th>
                           <th>Nội dung</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php if(count($list)>0): ?>
                                 <?php foreach ($list as $item) : ?>
                                    <tr class="datarow">
                                       <td>
                                          <input type="checkbox">
                                       </td>
                                       <td><?= $item -> id;?></td>
                                       <td>
                                          <div class="name">
                                             <?= $item ->name; ?>
                                          </div>
                                          <div class="function_style">
                                       <?php if ($item->status == 1) : ?>
                                       <a href="index.php?option=contact&cat=status&id=<?=$item->id; ?>" class="btn 
                                       btn-success btn-xs">
                                          <i class="fas fa-toggle-on"></i> Hiện
                                       </a>
                                       <?php else : ?>
                                       <a href="index.php?option=contact&cat=status&id=<?= $item->id; ?>" class="btn 
                                       btn-danger btn-xs">
                                          <i class="fas fa-toggle-off"></i> Ẩn
                                       </a>
                                       <?php endif; ?>
                                          <a href="index.php?option=contact&cat=edit&id=<?=$item->id; ?>" class="btn btn-primary btn-xs">
                                       <i class="fas fa-edit"></i> Trả lời

                                       </a>
                                       <a href="index.php?option=contact&cat=show&id=<?=$item->id; ?>" class="btn btn-info btn-xs">
                                       <i class="fas fa-eye"></i> Chi tiết
                                       </a>
                                       <a href="index.php?option=contact&cat=delete&id=<?=$item->id; ?>" class="btn btn-danger btn-xs">
                                       <i class="fas fa-trash"></i> Xoá
                                          
                                       </a>
                                          </div>
                                       </td>
                                       <td><?= $item -> email;?></td>
                                       <td><?= $item -> phone;?></td>
                                       <td><?= $item -> title;?></td>
                                       <td><?= $item -> content;?></td>
                                    </tr>

                                 <?php endforeach; ?>
                              <?php endif;?>
                           </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <form action ="index.php?option=brand&cat=process" method="post" enctype="multipart/form-data">
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>