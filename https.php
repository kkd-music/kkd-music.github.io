<?php
// 1. 定义存储目录（guizi文件夹路径）
$targetDir = './guizi/';

// 2. 检查并创建guizi文件夹（若不存在）
if (!is_dir($targetDir)) {
    // 0755权限：所有者可读写执行，其他用户只读执行（避免权限过高）
    if (!mkdir($targetDir, 0755, true)) {
        exit(json_encode([
            'status' => 'error',
            'msg' => '无法创建guizi文件夹，请检查目录权限'
        ]));
    }
}

// 3. 检查文件上传是否有错误
if ($_FILES['uploadFile']['error'] !== UPLOAD_ERR_OK) {
    $errorMsg = [
        UPLOAD_ERR_NO_FILE => '未选择文件',
        UPLOAD_ERR_INI_SIZE => '文件超过php.ini限制',
        UPLOAD_ERR_FORM_SIZE => '文件超过表单限制',
        UPLOAD_ERR_PARTIAL => '文件仅部分上传',
        UPLOAD_ERR_NO_TMP_DIR => '缺少临时文件夹',
        UPLOAD_ERR_CANT_WRITE => '写入磁盘失败'
    ];
    exit(json_encode([
        'status' => 'error',
        'msg' => $errorMsg[$_FILES['uploadFile']['error']] ?? '上传错误'
    ]));
}

// 4. 处理文件：获取临时文件路径和原文件名
$tmpFile = $_FILES['uploadFile']['tmp_name']; // PHP自动保存的临时文件
$originalName = basename($_FILES['uploadFile']['name']); // 原文件名（避免路径注入）
$targetFile = $targetDir . $originalName; // 最终存储路径

// 5. 移动临时文件到guizi文件夹
if (move_uploaded_file($tmpFile, $targetFile)) {
    // 上传成功，返回JSON给前端
    exit(json_encode(['status' => 'success']));
} else {
    exit(json_encode([
        'status' => 'error',
        'msg' => '文件移动失败，请检查guizi文件夹权限'
    ]));
}
?>
