"""
WSGI config for awesomeprojectnumberone project.

It exposes the WSGI callable as a module-level variable named ``application``.

For more information on this file, see
https://docs.djangoproject.com/en/1.11/howto/deployment/wsgi/
"""

import os, sys
sys.path.append('C:/Users/James/Bitnami Django Stack projects/awesomeprojectnumberone')
os.environ.setdefault("PYTHON_EGG_CACHE", "C:/Users/James/Bitnami Django Stack projects/awesomeprojectnumberone/egg_cache")


from django.core.wsgi import get_wsgi_application

os.environ.setdefault("DJANGO_SETTINGS_MODULE", "awesomeprojectnumberone.settings")

application = get_wsgi_application()
