<div class="clean-blog-post">
    <div class="row">
        <div class="col-lg-5"><img alt="coverimage" class="rounded img-fluid" src="../uploads/' . $row['coverimage'] . '"></div>
        <div class="col-lg-7">
            <h3>' . $row['title'] . '</h3>
            <div class="info"><span class="text-muted">' . substr($row['timestamp'], 0, 11) . ' by&nbsp;<a href="#">' . $row['username'] . '</a></span></div>
            <div class="post-body">' . $row['body'] . '.....</div>
            <br>
            <a  href="" class="btn btn-outline-primary btn-sm">Edit</a>
            <a  href="deletepost.php?slug=' . $row['slug'] . '" class="btn btn-danger btn-sm">Delete</a>
        </div>
    </div>
</div>