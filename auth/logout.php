<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari SMK17!'); window.location='../index.php';</script>";