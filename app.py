#coding: utf-8
from bottle import route, error, post, get, run, static_file, abort, redirect, response, request, template

# Static Routes
@get('/<filename:re:.*\.js>')
def javascripts(filename):
    return static_file(filename, root='static/js')

@get('/<filename:re:.*\.css>')
def stylesheets(filename):
    return static_file(filename, root='static/css')

@get('/<filename:re:.*\.(jpg|png|gif|ico)>')
def images(filename):
    return static_file(filename, root='static/img')

@get('/<filename:re:.*\.(eot|ttf|woff|svg)>')
def fonts(filename):
    return static_file(filename, root='static/fonts')

@get('/<filename:re:.*\.txt>')
def text(filename):
    return static_file(filename, root='static/help')


@route('/')
@route('/index')
def index():
     return template('index.tpl')

@route('/help')
def help_index():
    return static_file('help.html',root='html')

@error(404)
def error404(error):
    return '404 error !!!!!'

@get('/upload')
def upload_view():
    return """
        <form action="/upload" method="post" enctype="multipart/form-data">
          <input type="text" name="name" />
          <input type="file" name="data" />
          <input type="submit" name="submit" value="upload now" />
        </form>
        """    

@post('/upload')
def do_upload():
    name = request.forms.get('name')
    data = request.files.get('data')
    if name is not None and data is not None:
        raw = data.file.read() # small files =.=
        filename = data.filename
        return "Hello %s! You uploaded %s (%d bytes)." % (name, filename, len(raw))
    return "You missed a field."

@route('/tpl')
def tpl():
    return template('test')

run(host='localhost', port=8000, reloader=True)
