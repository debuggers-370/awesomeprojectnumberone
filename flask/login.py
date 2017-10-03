from abc import ABCMeta, ABC, abstractmethod, abstractproperty
from flask import Flask, app
import flask
from flask_login import LoginManager

class User(ABC):

    authenticated = False
    active = False
    anonymous = False
    id = None

    def is_authenticated(self):
        return self.authenticated

    def is_active(self):
        return self.active

    def is_anonymous(self):
        return self.anonymous

    def get_id(self):
        return self.id

login_manager = LoginManager()
@login_manager.user_loader
def load_user(user_id):
    pass #TODO: unimplemented for the moment


@app.route('/login', methods=['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        login_user(user)
        flask.flash('Logged in successfully.')

        next = flask.request.args.get('next')
        if not is_safe_url(next):   #TODO: unimplemented
            return flask.abort(400)

        return flask.redirect(next or flask.url_for('index'))

    return flask.render_template('htdoc/login.html', form=form)