# Generated by Django 2.2 on 2019-04-26 12:30

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('bill', '0001_initial'),
    ]

    operations = [
        migrations.DeleteModel(
            name='Bill',
        ),
        migrations.DeleteModel(
            name='Signup',
        ),
    ]
