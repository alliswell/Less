博客基于wordpress，主题基于[alliswell](https://github.com/alliswell)/[Less](https://github.com/alliswell/Less)修改

------

# 修改记录

## 首页

### 头部

修改了博客名字大小及颜色

### 中部

不显示文章全部内容，只显示部分摘要

```php
<div class="the-content">
<?php the_content( 'Continue...' ); ?>
</div><!-- the-content -->
```

改为

```php
<div class="the-content">
<?php
    if(!is_single()) {
        the_excerpt();
    } else {
        the_content(__('(more…)'));
    } 
; ?>
<?php wp_link_pages(); ?>
</div><!-- the-content -->
```

[引用](http://www.seo628.com/2551.html)

## 底部

将内容修改为版权&备案信息
