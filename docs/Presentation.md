---
marp: true
theme: default
class: lead
paginate: true
backgroundColor: linear-gradient(135deg, #f9fafb, #e5e7eb)
markdown:
  mermaid: true
style: |
  section {
    font-family: "Roboto", "Segoe UI", sans-serif;
    color: #1e293b;
    padding: 60px;
  }

  h1 {
    color: #0f172a;
    font-size: 2.5em;
    text-align: center;
    border-bottom: 3px solid #3b82f6;
    padding-bottom: 0.2em;
    margin-bottom: 0.6em;
  }

  h2, h3 {
    color: #2563eb;
    font-weight: 600;
  }

  ul {
    font-size: 1.1em;
    line-height: 1.6em;
    margin-left: 1.5em;
  }

  strong {
    color: #334155;
  }

  img {
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
    display: block;
    margin: 20px auto;
  }

  p {
    font-size: 1.1em;
  }

  .title-slide {
    text-align: center;
    color: #0f172a;
    background: linear-gradient(135deg, #93c5fd, #60a5fa);
    color: white;
  }

  .title-slide h1 {
    color: white;
    border: none;
    font-size: 3em;
  }

  .title-slide h3 {
    color: #e0f2fe;
  }
---

<!-- Title Slide -->
<!-- Add "class: title-slide" for custom style -->
<!-- Use class annotation in Marp -->

<!-- _class: title-slide -->

# **Portfolio Website**
### Présentation de l'analyse et de la planification

**Presented by:** Essamrachi Ali  
**Cliente:** Aymane El Achiri  
**Date:** 13-10-2025

---

# **Besoins & Pages principales**

### Objectifs :
- Créer un site portfolio personnel pour se présenter aux RH.  
- Mettre en valeur les compétences et les réalisations.  
- Fournir un aperçu clair du profil professionnel.  
- Permettre un contact rapide et simple.  
- Donner une image moderne et professionnelle.  

---

### **Pages principales :**
- **Accueil :** Photo, présentation rapide, bouton “Contactez-moi”.  
- **Projets :** Liste des projets avec descriptions, images et technologies utilisées.  
- **Contact :** Formulaire ou lien direct vers email / LinkedIn.  

---

# **Exemple de l’existant**

![placeholder 80%](/docs/images/Screenshot.png)

---

# **Diagramme du cas d’utilisation (PlantUML)**

![Diagramme UML](images/diagrams/usecase.png)

---

# **Diagramme de class**

![Class Diagram](images/diagrams/developer_portfolio.png)

---

# **Conception : Navigation Flow**

![Diagramme UML](images/diagrams/Screenshot.png)

---

# **Conception : Prototype**
![Home Page](images/home.png)

---

![Project Page](images/projects.png)

---

![About Page](images/about.png)