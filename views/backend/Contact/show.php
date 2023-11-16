<?php
use App\Models\Contact;

$id = $_REQUEST['id'];
$contact =  Contact::find($id);
if($contact==null){
    header("location:index.php?option=contact");
}

$list = Contact::where('status','=',0)->orderBy('Created_at','DESC')->get();

?>

<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->


      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Chi tiết liên hệ</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
               <div class="row">
               
                  Noi dung
                  <div class="col-md-11 text-right">
                  <a href="index.php?option=contact" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về liên hệ
                  </a>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                       
                           <th>Tên trường</th>
                           <th>Giá trị</th>
                          
                        </tr>
                     </thead>
                     <tbody>

                           <tr>
                              <td>ID</td>
                               <td><?= $contact->id;?></td>
                           </tr>
                           <tr>
                           <tr>
                              <td>Tên người liên hệ</td>
                               <td><?= $contact->name;?></td>
                           </tr>
                           <tr>
                              <td>Email</td>
                               <td><?= $contact->email;?></td>
                           </tr>
                           <tr>
                              <td>Phone</td>
                               <td><?= $contact->phone;?></td>
                           </tr>
                           <tr>
                           <tr>
                              <td>Tiêu đề</td>
                               <td><?= $contact->title;?></td>
                           </tr>
                           <tr>
                              <td>Nội dung</td>
                               <td><?= $contact->content;?></td>
                           </tr>
                           <tr>
                              <td>created_at</td>
                               <td><?= $contact->created_at;?></td>
                           </tr>
                           <tr>
                              <td>updated_at</td>
                               <td><?= $contact->updated_at;?></td>
                           </tr>
                           <tr>
                              <td>updated_by</td>
                               <td><?= $contact->updated_by;?></td>
                           </tr>
                           <tr>
                              <td>status</td>
                               <td><?= $contact->status;?></td>
                           </tr>

                    
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>

      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>