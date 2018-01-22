# Encoding.
Encoding.default_external = "utf-8"
encoding = "utf-8"
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "public/style"
sass_dir = "public/style/sass"
images_dir = "public/images"
javascripts_dir = "public/js"

environment = :develop

if environment == :production
  output_style = :compact
else
  output_style = :expanded
  sass_options = {:debug_info => false}
end

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = true
