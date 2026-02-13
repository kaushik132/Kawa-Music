@php
    echo '<?xml version="1.0" encoding="UTF-8"?>'
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{url('/')}}</loc>
        <lastmod>2025-06-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>




    @foreach ($artist as $artist)

    <url>
        <loc>{{url('/')}}/artist/{{$artist->slug}}</loc>
        <lastmod>{{$artist->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach


    @foreach ($productCategory as $productCategory)

    <url>
        <loc>{{url('/')}}/product/{{$productCategory->slug}}</loc>
        <lastmod>{{$productCategory->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    @foreach ($product as $product)

    <url>
        <loc>{{url('/')}}/product-detail/{{$product->slug}}</loc>
        <lastmod>{{$product->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach






    @foreach ($blogCategory as $blogCategory)

    <url>
        <loc>{{url('/')}}/blog/{{$blogCategory->slug}}</loc>
        <lastmod>{{$blogCategory->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach



       @foreach ($blog as $blog)

    <url>
        <loc>{{url('/')}}/blog-detail/{{$blog->slug}}</loc>
        <lastmod>{{$blog->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

     <url>
        <loc>{{url('/contact')}}</loc>
        <lastmod>2025-06-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>




</urlset>
