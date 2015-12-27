<?php
$config = array(
    'document' => array(
        array(
            'field' => 'documentcate_id',
            'label' => '分类',
            'rules' => 'required|is_natural_no_zero'
        ),
        array(
            'field' => 'title',
            'label' => '标题',
            'rules' => 'required|max_length[20]'
        ),
        array(
            'field' => 'sort',
            'label' => '排序',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'addtime',
            'label' => '添加时间',
            'rules' => 'required'
        ),
		array(
            'field' => 'content',
            'label' => '内容',
            'rules' => 'required|min_length[10]'
        )
    ),
    'documentcate' => array(
        array(
            'field' => 'pid',
            'label' => '分类',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'name',
            'label' => '名称',
            'rules' => 'required|max_length[10]'
        ),
        array(
            'field' => 'sort',
            'label' => '排序',
            'rules' => 'required|integer'
        )
    ),
	'advcate' => array(
        array(
            'field' => 'name',
            'label' => '分类名称',
            'rules' => 'required|max_length[10]'
        ),
        array(
            'field' => 'width',
            'label' => '图片宽',
            'rules' => 'required|integer'
        ),
		array(
            'field' => 'height',
            'label' => '图片高',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'sort',
            'label' => '排序',
            'rules' => 'required|integer'
        )
    ),
	'adv' => array(
        array(
            'field' => 'advcate_id',
            'label' => '分类名称',
            'rules' => 'required|is_natural_no_zero'
        ),
        array(
            'field' => 'name',
            'label' => '广告名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'sort',
            'label' => '排序',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'addtime',
            'label' => '添加时间',
            'rules' => 'required'
        )
    ),
	'links' => array(
        array(
            'field' => 'name',
            'label' => '链接名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'url',
            'label' => '链接网址',
            'rules' => 'required'
        ),
        array(
            'field' => 'sort',
            'label' => '排序',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'addtime',
            'label' => '添加时间',
            'rules' => 'required'
        )
    )
	,
	'user' => array(
        array(
            'field' => 'username',
            'label' => '用户名',
            'rules' => 'required'
        ),
        array(
            'field' => 'status',
            'label' => '状态',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'sort',
            'label' => '排序',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'addtime',
            'label' => '添加时间',
            'rules' => 'required'
        )
    )
);

$config['error_prefix'] = '<span style="color:#f00">';
$config['error_suffix'] = '</span>';
?>