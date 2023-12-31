<?php
if (isset($_SESSION['user'])) {
    header("location: index.php");
}

?>



<div class="ltn__login-area pb-110">
    <div class="container pt-[200px]">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng ký</h1>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto w-50 text-center">
            <div class="col-lg-6 w-100">
                <div class="account-login-inner w-full">
                    <form style="margin-left: 180px;" class=" w-100" action="index.php?page=dangkytk" method="post" enctype="multipart/form-data">
                        <table class="dangky w-full">

                            <tr>
                                <td class="ten_input">Tên đăng nhập</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="username" type="text"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; "><?php if (isset($_SESSION['errors']['username'])) : ?>
                                        <?= $_SESSION['errors']['username'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="ten_input">Mật khẩu</td>
                            </tr>

                            <tr>
                                <td colspan="2"><input name="password" type="password"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; "><?php if (isset($_SESSION['errors']['password'])) : ?>
                                        <?= $_SESSION['errors']['password'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="ten_input">Nhập lại mật khẩu</td>
                            </tr>

                            <tr>
                                <td colspan="2"><input name="repassword" type="password"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; "><?php if (isset($_SESSION['errors']['repassword'])) : ?>
                                        <?= $_SESSION['errors']['repassword'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="ten_input">Họ và tên</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="hovaten" type="text"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; "><?php if (isset($_SESSION['errors']['hovaten'])) : ?>
                                        <?= $_SESSION['errors']['hovaten'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="ten_input">Email</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="email" type="text"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; "><?php if (isset($_SESSION['errors']['email'])) : ?>
                                        <?= $_SESSION['errors']['email'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="ten_input">Số điện thoại</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="sdt" type="text"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; "><?php if (isset($_SESSION['errors']['sdt'])) : ?>
                                        <?= $_SESSION['errors']['sdt'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red; ">
                                    <?php if (isset($_SESSION['thongbao'])) : ?>
                                        <?= $_SESSION['thongbao'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <?php
                            $_SESSION['errors'] = [];
                            ?>
                            <tr>
                                <td class="mx-auto text-center">
                                    <button type="submit" name="dangky" class="btn btn-primary">Đăng ký</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="dangky2 flex item-center justify-center gap-x-1 mt-3">Bạn đã có tài khoản? <a href="index.php?page=vao_trang_dangky">Đăng nhập ngay</a></td>
                            </tr>
                        </table>
                    </form>
                    <div class="go-to-btn mt-50">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>