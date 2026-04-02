# Ansible Infrastructure Automation

This repository contains an Ansible-based deployment and server configuration project for a small multi-environment web platform. It demonstrates how application hosts, reverse proxy configuration, container runtime setup, MySQL services, and GitHub Actions driven deployments were automated through reusable roles and inventory-driven playbooks.

## What It Does

- Configures shared server prerequisites such as users, packages, Docker, and operational defaults
- Deploys environment-specific application stacks for development, staging, production, and short-lived feature environments
- Manages Traefik reverse proxy configuration and routing for multiple app entry points
- Uses Ansible Vault in the original private version for sensitive values, while this public version keeps only the structure
- Supports CI-triggered deployments through GitHub Actions workflows

## Repository Structure

- `site.yml` and environment playbooks orchestrate full deployments
- `inventory.ini` defines example host groups for automation, dev, staging, and production
- `group_vars/` contains environment-specific variables
- `roles/` contains reusable automation for Docker, Traefik, application deployment, MySQL, common host setup, and GitHub runners
- `.github/workflows/` shows how deployments were executed from CI

## Sanitisation Notes

This public copy has been sanitised for portfolio use:

- real domains, emails, hostnames, and org identifiers were replaced with placeholders
- encrypted vault files and local vault password files were removed and recreated as empty files
- registry paths and environment-specific values were anonymised

The role structure, playbook flow, and overall automation design are preserved to show the engineering approach without exposing operational secrets.
