import React, { useEffect } from "react"

const navLinks = [
  { label: "Menu", href: "#from-our-cases" },
  { label: "The Sacripantina", href: "#the-sacripantina" },
  { label: "Catering", href: "#catering" },
  { label: "Our Story", href: "#brand-quote" },
  { label: "Order Pickup", href: "#order-delivery" },
  { label: "Contact", href: "#visit-us" },
]

const socialLinks = [
  { label: "Instagram", href: "#" },
  { label: "Facebook", href: "#" },
  { label: "Yelp", href: "#" },
]

const footerLogo =
  "/wp-content/uploads/2026/04/Stella_Sello-scaled.png"

const supportAccent =
  "/wp-content/uploads/2026/04/Stella-Elementos-de-Apoyo-03.png"

export default function Footer() {
  useEffect(() => {
    const items = document.querySelectorAll(".st-footer-reveal")
    if (!items.length) return

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => entry.target.classList.add("is-visible"), index * 100)
            observer.unobserve(entry.target)
          }
        })
      },
      { threshold: 0.14 }
    )

    items.forEach((item) => observer.observe(item))
    return () => observer.disconnect()
  }, [])

  return (
    <footer className="st-footer">
      <div className="st-footer-street-shadow" aria-hidden="true" />

      <div className="st-footer-shell">
        <div className="st-footer-postcard">
          <div className="st-footer-accent" aria-hidden="true">
            <img src={supportAccent} alt="" />
          </div>

          <div className="st-footer-scene" aria-hidden="true">
            <span className="st-table st-table-left" />
            <span className="st-table st-table-right" />
            <span className="st-chair st-chair-left-1" />
            <span className="st-chair st-chair-left-2" />
            <span className="st-chair st-chair-right-1" />
            <span className="st-chair st-chair-right-2" />
            <span className="st-planter st-planter-left" />
            <span className="st-planter st-planter-right" />
          </div>

          <div className="st-footer-watermark" aria-hidden="true">
            <img src={footerLogo} alt="" />
          </div>

          <div className="st-footer-grid">
            <div className="st-footer-brand-col st-footer-reveal">
              <a href="#top" className="st-footer-brand" aria-label="Stella Pastry & Cafe Home">
                <img src={footerLogo} alt="Stella Pastry & Cafe — The House of Sacripantina" />
              </a>

              <p className="st-footer-tagline">
                Since 1942, Stella Pastry & Cafe has remained the place for the one cake that cannot be found anywhere else.
              </p>

              <div className="st-footer-meta">
                <span className="st-footer-chip">Since 1942</span>
                <span className="st-footer-chip">North Beach</span>
                <span className="st-footer-chip">San Francisco</span>
              </div>
            </div>

            <div className="st-footer-reveal">
              <h3 className="st-footer-col-title">Visit</h3>
              <div className="st-footer-list">
                <p>446 Columbus Ave, North Beach, San Francisco, CA 94133</p>
                <p>Open Daily 7:30 AM – 8:00 PM</p>
                <p>Fri &amp; Sat until 11:00 PM</p>
                <p>(415) 986-2914</p>
              </div>
            </div>

            <div className="st-footer-reveal">
              <h3 className="st-footer-col-title">Order</h3>
              <div className="st-footer-list">
                <p>DoorDash</p>
                <p>Uber Eats</p>
                <p>In-store pickup</p>
              </div>
            </div>

            <div className="st-footer-reveal">
              <h3 className="st-footer-col-title">Explore</h3>
              <nav className="st-footer-nav" aria-label="Footer Navigation">
                {navLinks.map((item) => (
                  <a key={item.label} href={item.href}>
                    {item.label}
                  </a>
                ))}
              </nav>

              <div className="st-footer-socials">
                {socialLinks.map((item) => (
                  <a key={item.label} href={item.href}>
                    {item.label}
                  </a>
                ))}
              </div>
            </div>
          </div>
        </div>

        <div className="st-footer-bottom">
          <div className="st-footer-bottom-row">
            <p className="st-footer-bottom-copy">
              Stella Pastry &amp; Cafe · North Beach, San Francisco
            </p>
            <p className="st-footer-bottom-note">
              Since 1942 · The House of Sacripantina
            </p>
          </div>
        </div>
      </div>
    </footer>
  )
}