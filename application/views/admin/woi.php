<div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                        BAY
                    </a>
                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                        HALAMAN ADMIN
                    </a>
                </div>
                <?php
                $menu = $this->uri->segment(2);

                ?>
                <ul class="nav">
                <li class="<?php if ($menu == 'home') {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('admin/home')?>">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="<?php if ($menu == 'konten') {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('admin/konten')?>">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Konten</p>
                        </a>
                    </li>
                    <li class="<?php if ($menu == 'carousel') {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('admin/carousel')?>">
                            <i class="tim-icons icon-atom"></i>
                            <p>Carousel</p>
                        </a>
                    </li>
                    <li class="<?php if ($menu == 'kategori') {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('admin/kategori')?>">
                            <i class="tim-icons icon-pin"></i>
                            <p>Kategori</p>
                        </a>
                    </li>

                    <li class="<?php if ($menu == 'user') {
                                    echo 'active';
                                } ?>">
                        <a href="<?= site_url('admin/user')?>">
                            <i class="tim-icons icon-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                </ul>
            </div>