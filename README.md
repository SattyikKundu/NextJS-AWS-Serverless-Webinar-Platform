# Next.js + AWS Serverless Webinar Platform

A webinar registration and management platform integrating WordPress, Elementor, Next.js, and AWS serverless services.

## Project Overview

The platform provides a public-facing WordPress website for webinar discovery and registration, an authenticated Next.js organizer dashboard, and an AWS serverless backend for authoritative business operations.

The project is being developed incrementally, with infrastructure, application functionality, security, automated verification, and deployment workflows introduced through controlled implementation stages.

## Technology Stack

| Layer | Technology | Responsibility |
|---|---|---|
| Public website | WordPress, Elementor | Webinar catalog and public registration interface |
| Organizer application | Next.js, React, TypeScript, Tailwind CSS | Authenticated webinar management interface |
| Frontend hosting | Vercel | Next.js application hosting |
| WordPress hosting | AccuWeb Hosting | Public website hosting |
| Backend | AWS Lambda, API Gateway | Application APIs and server-side processing |
| Data storage | Amazon DynamoDB | Webinar and registration records |
| Authentication | Amazon Cognito | Organizer authentication |
| Asynchronous processing | Amazon EventBridge, Amazon SQS | Application events and background processing |
| Email | Amazon SES | Registration confirmations and notifications |
| File storage | Amazon S3 | Protected application exports |
| Infrastructure | AWS SAM, CloudFormation | Infrastructure as code |
| Automation | GitHub Actions | Continuous integration and deployment workflows |

AWS services listed above describe the planned architecture; they are not all implemented or deployed yet.

## Repository Structure

```text
.github/       GitHub Actions workflows
wordpress/     WordPress and Elementor integration
nextjs/        Next.js organizer application
aws/           AWS infrastructure and backend functions
docs/          Engineering diagrams and traceability artifacts
scripts/       Development and operational utilities
samples/       Sample API payloads and demonstration data
```

## Local Development

### Prerequisites

- Node.js and npm
- Git
- AWS SAM CLI for infrastructure development and validation
- AWS CLI and an appropriately configured AWS account for later AWS deployment
- WordPress and PHP environment for testing the WordPress integration

### Next.js Setup

From the repository root:

```powershell
cd nextjs
npm install
npm run dev
```

Open `http://localhost:3000` to view the application.

### Validation

```powershell
cd nextjs
npm run lint
npm run build
```

These commands validate the Next.js application. Additional automated tests and infrastructure validation will be introduced during implementation.

## Environment Configuration

The Next.js environment template is located at:

`nextjs/.env.example`

Copy it to `nextjs/.env.local` when local configuration is required. Populate the local file with the appropriate non-secret public configuration values.

Never commit credentials, access keys, API secrets, or real user data.

## Current Implementation Status

**Phase: Project scaffolding**

The initial work establishes the repository layout, Next.js application, WordPress plugin entry point, and AWS SAM template.

Business workflows, AWS infrastructure deployment, authentication, and production integrations are not yet implemented.

## Development Principles

- Infrastructure defined and maintained as code
- Least-privilege AWS access
- Backend enforcement of authorization and business rules
- Environment separation
- Automated verification and traceability
- Secure handling of credentials and user information
- Incremental implementation with documented acceptance checks
