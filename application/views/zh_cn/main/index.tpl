<ul>
    {section name=item loop=$article}
        <li>
            {$article[item].title}
            <p>作者:{$article[item].name}</p>
            <p>内容:{$article[item].content}</p>
        </li>
    {sectionelse}
        没有文章
    {/section}
</ul>