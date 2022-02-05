# Blog App


## For Users
### List Blogs (GET)
```bash
https://blog.test/api/blog/posts
```
### Show Blog Post (GET)
```bash
https://blog.test/api/blog/posts/{post_id}
```

### Comment Blog Post (POST)

#### Comment Direct to a Post
```bash
https://blog.test/api/blog/posts/{post_id}/comments
```

#### Reply Direct to a Comment
```bash
https://blog.test/api/blog/posts/{post_id}/comments/{comment_id}
```


## For Admin

### Create Posts (GET)
```bash
https://blog.test/admin/posts
```
