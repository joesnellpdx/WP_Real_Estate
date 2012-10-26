# Require any additional compass plugins here.

http_path = "/"
css_dir = "_css"
sass_dir = "_scss"
images_dir = "_images"
javascripts_dir = "_js"
fonts_dir = "_font"

output_style = :compressed
environment = :development

relative_assets = true
sass_options = {:debug_info=>true}

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
preferred_syntax = :scss 
